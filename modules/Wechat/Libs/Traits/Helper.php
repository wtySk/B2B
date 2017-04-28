<?php
/**
 * Author: wtySk
 * Date: 2017/3/14 17:07
 */
namespace Modules\Wechat\Libs\Traits;
//引用七牛云
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

trait Helper {
   

   /**
    * 七牛云上传图片
    * @param  [string] $imageName   [上传到七牛云上名称]
    * @param  [string] $getRealPath [图片本地路径]
    * @param  string $fops        [生成样式的图片样式]
    * @return boolean 
    */
   public function uploadImage($imageName, $getRealPath, $fops = 'imageMogr2/auto-orient/thumbnail/450x300>/blur/1x0/quality/75|imageslim')
   {
       // 需要填写你的 Access Key 和 Secret Key
       $accessKey = env('QINIU_ACCESS_KEY');
       $secretKey = env('QINIU_SECRET_KEY');

       // 构建鉴权对象
       $auth = new Auth($accessKey, $secretKey);

       // 要上传的空间
       $bucket = env('QINIU_BUCKET');
       //对图片进行操作
//       $fops = "imageMogr2/auto-orient/thumbnail/450x300>/blur/1x0/quality/75|imageslim";

       // 上传到七牛后保存的文件名
       $imgname= $imageName;

       //可以对转码后的文件进行使用saveas参数自定义命名，当然也可以不指定文件会默认命名并保存在当间
       $savekey = \Qiniu\base64_urlSafeEncode(env('QINIU_BUCKET').":".$imgname);
       $fops = $fops.'|saveas/'.$savekey;

       $policy = array(
           'persistentOps' => $fops
       );
       $uptoken = $auth->uploadToken($bucket, null, 3600, $policy);

       // 要上传文件的本地路径
       $filePath = $getRealPath;

       // 初始化 UploadManager 对象并进行文件的上传。
       $uploadMgr = new UploadManager();
       // 调用 UploadManager 的 putFile 方法进行文件的上传。
       list($ret, $err) = $uploadMgr->putFile($uptoken, $imgname, $filePath);
       if ($err !== null) {
           return false;
       } else {
           return true;
       }
   }
}