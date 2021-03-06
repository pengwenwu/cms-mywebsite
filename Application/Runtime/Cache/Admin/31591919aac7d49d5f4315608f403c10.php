<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/Public/css/pintuer.css">
<link rel="stylesheet" href="/Public/css/admin.css">
<script src="/Public/js/jquery.js"></script>
<script src="/Public/js/pintuer.js"></script>
<script charset="UTF-8" src="/Public/js/editor/kindeditor-min.js"></script>
<script charset="UTF-8" src="/Public/js/editor/lang/zh_CN.js"></script>
<script>
  //加入在线编辑器
  var editor;
  KindEditor.ready(function(K) {
      editor = K.create('textarea[name="m_desc"]', {
          allowFileManager : true
      });
  });
</script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>成员添加</strong>
    
  </div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Content/memberAdd');?>" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>成员昵称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="m_name" data-validate="required:请输入昵称" />
          <div class="tips"></div>
        </div>
      </div> 
      
      <div class="form-group">
        <div class="label">
          <label>头像：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""/>
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;" onClick="javascript:uploadFile();" >
          <input type="file" name='m_pic' id='file_upload' style="display: none">
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>职位：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="m_position" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>成员QQ：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="m_qq" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea name="m_desc" style="width: 700px;height: 300px;visibility: hidden;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="m_order_by" value="50"  data-validate="number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
function uploadFile(){
  document.getElementById('file_upload').click();
}
document.getElementById("file_upload").onchange = function () {
    document.getElementById("url1").value = this.value;
};
</script>
</body></html>