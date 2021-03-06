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
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 课程分类</strong></div>
  <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加分类</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">分类</th>
      <th width="10%">排序</th>
      <th width="10%">操作</th>
    </tr>
    <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
      <td><?php echo ($v['c_id']); ?></td>
      <td><?php echo ($v['c_name']); ?></td>
      <td><input type="text" name="sort[1]" value="<?php echo ($v['c_order_by']); ?>" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>
      <td><div class="button-group"> <a class="button border-main" href="<?php echo U('Class/cateEdit',array('cate_id'=>$v['c_id']));?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="<?php echo U('Class/cateDel',array('cate_id'=>$v['c_id']));?>" onclick="return confirm('确认删除吗？')"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr><?php endforeach; endif; ?>
    <tr>
      <td colspan="4"><div class="pagelist"><?php echo ($page); ?></div></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){			
		
	}
}
</script>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Class/cateAdd');?>">
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="c_name" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>批量添加：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input w50" name="c_names" style="height:150px;" placeholder="多个分类标题请转行"></textarea>
          <div class="tips">多个分类标题请转行</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="c_order_by" value="50"  data-validate="number:排序必须为数字" />
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
</body>
</html>