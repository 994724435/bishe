<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>page1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="__ROOT__/Public/index/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="__ROOT__/Public/index/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="__ROOT__/Public/index/css/styles1.css" type="text/css" rel="stylesheet"/>
    <link href="__ROOT__/Public/index/css/styles.css" type="text/css" rel="stylesheet"/>
    <link href="__ROOT__/Public/index/css/page1/styles.css" type="text/css" rel="stylesheet"/>
    
    <script src="__ROOT__/Public/index/js/jquery-1.7.1.min.js"></script>
    <script src="__ROOT__/Public/index/js/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="__ROOT__/Public/index/js/axure/axQuery.js"></script>
    <script src="__ROOT__/Public/index/js/axure/globals.js"></script>
    <script src="__ROOT__/Public/index/js/axutils.js"></script>
    <script src="__ROOT__/Public/index/js/axure/annotation.js"></script>
    <script src="__ROOT__/Public/index/js/axure/axQuery.std.js"></script>
    <script src="__ROOT__/Public/index/js/axure/doc.js"></script>
    <script src="__ROOT__/Public/index/js/document.js"></script>
    <script src="__ROOT__/Public/index/js/messagecenter.js"></script>
    <script src="__ROOT__/Public/index/js/axure/events.js"></script>
    <script src="__ROOT__/Public/index/js/axure/recording.js"></script>
    <script src="__ROOT__/Public/index/js/axure/action.js"></script>
    <script src="__ROOT__/Public/index/js/axure/expr.js"></script>
    <script src="__ROOT__/Public/index/js/axure/geometry.js"></script>
    <script src="__ROOT__/Public/index/js/axure/flyout.js"></script>
    <script src="__ROOT__/Public/index/js/axure/ie.js"></script>
    <script src="__ROOT__/Public/index/js/axure/model.js"></script>
    <script src="__ROOT__/Public/index/js/axure/repeater.js"></script>
    <script src="__ROOT__/Public/index/js/axure/sto.js"></script>
    <script src="__ROOT__/Public/index/js/axure/utils.temp.js"></script>
    <script src="__ROOT__/Public/index/js/axure/variables.js"></script>
    <script src="__ROOT__/Public/index/js/axure/drag.js"></script>
    <script src="__ROOT__/Public/index/js/axure/move.js"></script>
    <script src="__ROOT__/Public/index/js/axure/visibility.js"></script>
    <script src="__ROOT__/Public/index/js/axure/style.js"></script>
    <script src="__ROOT__/Public/index/js/axure/adaptive.js"></script>
    <script src="__ROOT__/Public/index/js/axure/tree.js"></script>
    <script src="__ROOT__/Public/index/js/axure/init.temp.js"></script>
    <script src="__ROOT__/Public/index/js/page1/data.js"></script>
    <script src="__ROOT__/Public/index/js/axure/legacy.js"></script>
    <script src="__ROOT__/Public/index/js/axure/viewer.js"></script>
    <script src="__ROOT__/Public/index/js/axure/math.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/__ROOT__/Public/index/img/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
    <style type="text/css">
        table{border-collapse:collapse;border-spacing:0;border-left:1px solid #888;border-top:1px solid #888;}
        th,td{border-right:1px solid #888;border-bottom:1px solid #888;padding:5px 15px;}
        th{font-weight:bold;}         
</style>

  </head>
  <body>
  	       <form action="" method="post">     	    	
         <p style="margin:10px 0 0 700px;"><span style="color: red;"><?php echo $_SESSION['name']; ?></span>你好,欢迎登录！</p>
    <div id="base" class="">

      <!-- Unnamed (矩形) -->
      <div id="u9" class="ax_default box_1">
        <div id="u9_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u10" class="text" style="display: none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- 出售按钮 (矩形) -->
      <div id="u11" class="ax_default button" data-label="出售按钮">
        <div id="u11_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u12" class="text" style="visibility: visible;">
          <p><span>出售</span></p>
        </div>
      </div>

      <!-- 我的竞标按钮 (矩形) -->
      <div id="u13" class="ax_default button" data-label="我的竞标按钮">
        <div id="u13_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u14" class="text" style="visibility: visible;">
          <p><span>我的竞标</span></p>
        </div>
      </div>

      <!-- 购买按钮 (矩形) -->
      <div id="u15" class="ax_default button selected" data-label="购买按钮">
        <div id="u15_div" class="selected"></div>
        <!-- Unnamed () -->
        <div id="u16" class="text" style="visibility: visible;">
          <a href="__ROOT__/index.php/Index/main" style="text-decoration: none;"><p><span>购买</span></p></a>
        </div>
      </div>

      <!-- Unnamed (购买界面) -->

      <!-- Unnamed (组合) -->
      <div id="u18" class="ax_default">

        <!-- Unnamed (组合) -->
        <div id="u19" class="ax_default">

          <!-- Unnamed (矩形) -->
          <div id="u20" class="ax_default box_1">
            <div id="u20_div" class="">
									<div style="width: 100%;margin-top: 39px;">
									  <table>
										 	<?php if(is_array($product)): foreach($product as $key=>$val): ?><tr style="text-align: center;"><td width="281px"><?php echo ($val['name']); ?></td><td width="155px"><?php echo ($val['time']); ?>小时</td><td width="238px"><?php echo ($val['admin']); ?></td><td width="224px">一口价:<?php echo ($val['end']); ?><a href="__ROOT__/index.php/Index/buy/id/<?php echo ($val["id"]); ?>">购买</a>  |  
										    	<form action="" method="post">
										    		 <?php echo ($val['start']); ?>+<input type="text" name="add" style="width: 27px;">
										    		 <input type="hidden" name="id" value="<?php echo ($val['id']); ?>" />
										    		  <input type="hidden" name="start1" value="<?php echo ($val['start']); ?>" />
										    		   <input type="hidden" name="end1" value="<?php echo ($val['end']); ?>" />
										         <input type="submit" value="竞拍"/>
										      </form>
										    </td>
										    	  
										    	
										    </tr><?php endforeach; endif; ?>   
										 </table>
									</div>
            </div>
            <!-- Unnamed () -->
            <div id="u21" class="text" style="display: none; visibility: hidden">
              <p><span></span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u22" class="ax_default box_1">
            <div id="u22_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u23" class="text" style="display: none; visibility: hidden">
              <p><span></span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u24" class="ax_default box_1">
            <div id="u24_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u25" class="text" style="visibility: visible;">
              <p><span>物品名称</span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u26" class="ax_default box_1">
            <div id="u26_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u27" class="text" style="visibility: visible;">
              <p><span>剩余时间</span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u28" class="ax_default box_1">
            <div id="u28_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u29" class="text" style="visibility: visible;">
              <p><span>拍卖人</span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u30" class="ax_default box_1">
            <div id="u30_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u31" class="text" style="visibility: visible;">
              <p><span>总价</span></p>
            </div>
          </div>
        </div>

        <!-- Unnamed (组合) -->
        <div id="u32" class="ax_default">

          <!-- Unnamed (组合) -->
          <div id="u33" class="ax_default">

            <!-- Unnamed (矩形) -->
            <div id="u34" class="ax_default box_1">
              <div id="u34_div" class=""></div>
              <!-- Unnamed () -->
              <div id="u35" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!-- Unnamed (树状菜单) -->
            <div id="u36" class="ax_default tree_node treeroot">
              <div id="u36_children" class="u36_children">

                <!-- Unnamed (Tree Node) -->
                <div id="u37" class="ax_default tree_node treenode">

                  <!-- Unnamed (图片) -->
                  <div id="u38" class="ax_default image">
                    <img id="u38_img" class="img " src="__ROOT__/Public/index/img/page1/u38.png"/>
                    <!-- Unnamed () -->
                    <div id="u39" class="text" style="display: none; visibility: hidden">
                      <p><span></span></p>
                    </div>
                  </div>
                  <!-- Unnamed (矩形) -->
                  <div id="u40" class="" selectiongroup="u17u36_tree_group">
                    <div id="u40_div" class=""></div>
                    <!-- Unnamed () -->
                    <div id="u41" class="text" style="visibility: visible;">
                      <p><span>全部</span></p>
                    </div>
                  </div>
                  <div id="u37_children" class="u37_children" style="visibility:hidden;">

                    <!-- Unnamed (Tree Node) -->
                    <div id="u42" class="ax_default tree_node treenode">

                      <!-- Unnamed (图片) -->
                      <div id="u43" class="ax_default image">
                        <img id="u43_img" class="img " src="__ROOT__/Public/index/img/page1/u38.png"/>
                        <!-- Unnamed () -->
                        <div id="u44" class="text" style="display: none; visibility: hidden">
                          <p><span></span></p>
                        </div>
                      </div>
                      <!-- Unnamed (矩形) -->
                      <div id="u45" class="" selectiongroup="u17u36_tree_group">
                        <div id="u45_div" class=""></div>
                        <!-- Unnamed () -->
                        <div id="u46" class="text" style="visibility: visible;">
                          <p><span>普通物品</span></p>
                        </div>
                      </div>
                      <div id="u42_children" class="u42_children" style="visibility:hidden;">

                        <!-- Unnamed (Tree Node) -->
                        
                        <div id="u47" class="ax_default tree_node treenode">
                          <!-- Unnamed (矩形) -->
                         
                          <div id="u48" class="" selectiongroup="u17u36_tree_group">
                         
                            <div id="u48_div" class=""></div>
                            <!-- Unnamed () -->
                          
                            <div id="u49" class="text" >
                                <a href="__ROOT__/index.php/Index/main/p/1">消耗品</a>
                            </div>
                          </div>
                        </div>

                        <!-- Unnamed (Tree Node) -->
                        <div id="u50" class="ax_default tree_node treenode">
                          <!-- Unnamed (矩形) -->
                          <div id="u51" class="" selectiongroup="u17u36_tree_group">
                            <div id="u51_div" class=""></div>
                            <!-- Unnamed () -->
                            <div id="u52" class="text" style="visibility: visible;">
                              <a href="__ROOT__/index.php/Index/main/p/2"><p><span>工具</span></p></a>
                            </div>
                          </div>
                        </div>

                        <!-- Unnamed (Tree Node) -->
                        <div id="u53" class="ax_default tree_node treenode">
                          <!-- Unnamed (矩形) -->
                          <div id="u54" class="" selectiongroup="u17u36_tree_group">
                            <div id="u54_div" class=""></div>
                            <!-- Unnamed () -->
                            <div id="u55" class="text" style="visibility: visible;">
                              <a href="__ROOT__/index.php/Index/main/p/3"><p><span>素材</span></p></a>
                            </div>
                          </div>
                        </div>

                        <!-- Unnamed (Tree Node) -->
                        <div id="u56" class="ax_default tree_node treenode">
                          <!-- Unnamed (矩形) -->
                          <div id="u57" class="" selectiongroup="u17u36_tree_group">
                            <div id="u57_div" class=""></div>
                            <!-- Unnamed () -->
                            <div id="u58" class="text" style="visibility: visible;">
                              <a href="__ROOT__/index.php/Index/main/p/4"><p><span>技能珠</span></p></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Unnamed (Tree Node) -->
                    <div id="u59" class="ax_default tree_node treenode">

                      <!-- Unnamed (图片) -->
                      <div id="u60" class="ax_default image">
                        <img id="u60_img" class="img " src="__ROOT__/Public/index/img/page1/u38.png"/>
                        <!-- Unnamed () -->
                        <div id="u61" class="text" style="display: none; visibility: hidden">
                          <p><span></span></p>
                        </div>
                      </div>
                      <!-- Unnamed (矩形) -->
                      <div id="u62" class="" selectiongroup="u17u36_tree_group">
                        <div id="u62_div" class=""></div>
                        <!-- Unnamed () -->
                        <div id="u63" class="text" style="visibility: visible;">
                          <p><span>装备</span></p>
                        </div>
                      </div>
                      <div id="u59_children" class="u59_children" style="visibility:hidden;">

                        <!-- Unnamed (Tree Node) -->
                        <div id="u64" class="ax_default tree_node treenode">

                          <!-- Unnamed (图片) -->
                          <div id="u65" class="ax_default image">
                            <img id="u65_img" class="img " src="__ROOT__/Public/index/img/page1/u38.png"/>
                            <!-- Unnamed () -->
                            <div id="u66" class="text" style="display: none; visibility: hidden">
                              <p><span></span></p>
                            </div>
                          </div>
                          <!-- Unnamed (矩形) -->
                          <div id="u67" class="" selectiongroup="u17u36_tree_group">
                            <div id="u67_div" class=""></div>
                            <!-- Unnamed () -->
                            <div id="u68" class="text" style="visibility: visible;">
                               <p><span>首饰</span></p>
                            </div>
                          </div>
                          <div id="u64_children" class="u64_children" style="visibility:hidden;">

                            <!-- Unnamed (Tree Node) -->
                            <div id="u69" class="ax_default tree_node treenode">
                              <!-- Unnamed (矩形) -->
                              <div id="u70" class="" selectiongroup="u17u36_tree_group">
                                <div id="u70_div" class=""></div>
                                <!-- Unnamed () -->
                                <div id="u71" class="text" style="visibility: visible;">
                                  <a href="__ROOT__/index.php/Index/main/p/5"><p><span>护石</span></p></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (组合) -->
          <div id="u72" class="ax_default">

            <!-- Unnamed (矩形) -->
            <div id="u73" class="ax_default box_1">
              <div id="u73_div" class=""></div>
              <!-- Unnamed () -->
              <div id="u74" class="text" style="display: none; visibility: hidden">
                <p><span></span></p>
              </div>
            </div>

            <!-- Unnamed (文本框) -->
            <div id="u75" class="ax_default text_field">
              <input id="u75_input" type="text" value=""/>
            </div>

            <!-- Unnamed (提交按钮) -->
            <div id="u76" class="ax_default html_button">
              <input id="u76_input" type="submit" value="搜索"/>
            </div>
          </div>
        </div>

        <!-- Unnamed (文本框) -->
        <div id="u77" class="ax_default text_field">
          <input id="u77_input" type="number" style="width: 0px;" value=""/>
        </div>

        <!-- Unnamed (提交按钮) -->
        <div id="u78" class="ax_default html_button">
          <a href=""><input id="u78_input" type="submit" style="width: 0px;" value="竞标"/></a>
          
        </div>

        <!-- Unnamed (提交按钮) -->
        <div id="u79" class="ax_default html_button">
          <!--<input id="u79_input" type="submit" value="立即购买"/>-->
        </div>
      </div>

      <!-- Unnamed (出售界面) -->

      <!-- Unnamed (组合) -->
      <div id="u81" class="ax_default ax_default_hidden">

        <!-- Unnamed (组合) -->
        <div id="u82" class="ax_default">

          <!-- Unnamed (矩形) -->
          <div id="u83" class="ax_default box_1">
            <div id="u83_div" class="">
            	<div style="width: 100%;margin-top: 40px;">
            		
					 <table>
					 	<?php if(is_array($doneSale)): foreach($doneSale as $key=>$val): ?><tr><td width="281px"><?php echo ($val['name']); ?></td><td width="155px"><?php echo ($val['time']); ?>小时</td><td width="238px"><?php echo ($val['buyer']); ?></td><td width="224px"><?php echo ($val['start']); ?></td></tr><?php endforeach; endif; ?>   
					 </table>
            	</div>
            </div>
            <!-- Unnamed () -->
            <div id="u84" class="text" style="display: none; visibility: hidden">
              <p><span></span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u85" class="ax_default box_1">
            <div id="u85_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u86" class="text" style="display: none; visibility: hidden">
              <p><span></span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u87" class="ax_default box_1">
            <div id="u87_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u88" class="text" style="visibility: visible;">
              <p><span>物品名称</span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u89" class="ax_default box_1">
            <div id="u89_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u90" class="text" style="visibility: visible;">
              <p><span>剩余时间</span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u91" class="ax_default box_1">
            <div id="u91_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u92" class="text" style="visibility: visible;">
              <p><span>竞标人</span></p>
            </div>
          </div>

          <!-- Unnamed (矩形) -->
          <div id="u93" class="ax_default box_1">
            <div id="u93_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u94" class="text" style="visibility: visible;">
              <p><span>总价</span></p>
            </div>
          </div>
        </div>

        <!-- Unnamed (组合) -->
        <div id="u95" class="ax_default">

          <!-- Unnamed (矩形) -->
          <div id="u96" class="ax_default box_1">
            <div id="u96_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u97" class="text" style="display: none; visibility: hidden">
              <p><span></span></p>
            </div>
          </div>


          <!-- Unnamed (组合) -->
          <div id="u98" class="ax_default">

            <!-- Unnamed (组合) -->
            <div id="u99" class="ax_default">

              <!-- Unnamed (矩形) -->
              <div id="u100" class="ax_default box_1">
                <div id="u100_div" class=""></div>
                <!-- Unnamed () -->
                <div id="u101" class="text" style="visibility: visible;">
                  <p><span>请放入要拍卖的物品</span></p>
                </div>
              </div>
            

              <!-- Unnamed (矩形) -->
              <div id="u102" class="ax_default box_1">
      <div style="width:120px;margin-top: 48px;margin-left:-28px;position: absolute;">					
      	<p style="float: left;">类别:</p><select style="width: 84px;height: 24px;padding: 5px 0 0 -5px;" name="type">
					  <option value ="1">消耗品</option>
					  <option value ="2">工具</option>
					  <option value="3">素材</option>
					  <option value="4">技能珠</option>
					  <option value="5">护石</option>
					</select>
      </div>
                <div id="" class="">
                	<input type="text" name="name" id="" value="" style="width: 130px;height: 35px;margin-left: -34px;"/>
                </div>
                <!-- Unnamed () -->
                <div id="u103" class="text" style="display: none; visibility: hidden">
                  <p><span></span></p>
                </div>
              </div>
            </div>

            <!-- Unnamed (组合) -->
            <div id="u104" class="ax_default">

              <!-- Unnamed (矩形) -->
              <div id="u105" class="ax_default box_1">
                <div id="u105_div" class=""></div>
                <!-- Unnamed () -->
                <div id="u106" class="text" style="visibility: visible;">
                  <p><span>拍卖时间</span></p>
                </div>
              </div>

              <!-- Unnamed (菜单) -->
              <div id="u107" class="ax_default">
                

                <!-- Unnamed (表格) -->
                <div id="u108" class="ax_default">
					<select style="width: 78px;height: 24px;padding: 5px 0 0 -5px;" name="time">
					  <option value ="8">8小时</option>
					  <option value ="16">16小时</option>
					  <option value="24">24小时</option>
					  <option value="48">48小时</option>
					</select>
                </div>

                <!-- Unnamed (菜单) -->
                <div id="u111" class="ax_default sub_menu">
                  <!--<img id="u111_menu" class="img " src="__ROOT__/Public/index/img/page1/u111_menu.png" alt="u111_menu"/>-->
                
                  <!-- Unnamed (表格) -->
                  <div id="u112" class="ax_default">


                  </div>
                </div>
              </div>
            </div>

            <!-- Unnamed (组合) -->
            <div id="u117" class="ax_default">

              <!-- Unnamed (矩形) -->
              <div id="u118" class="ax_default box_1">
                <div id="u118_div" class=""></div>
                <!-- Unnamed () -->
                <div id="u119" class="text" style="visibility: visible;">
                  <p><span>设置上架物品的价格</span></p>
                </div>
              </div>

              <!-- Unnamed (组合) -->
              <div id="u120" class="ax_default">

                <!-- Unnamed (矩形) -->
                <div id="u121" class="ax_default box_1">
                  <div id="u121_div" class=""></div>
                  <!-- Unnamed () -->
                  <div id="u122" class="text" style="visibility: visible;">
                    <p><span>起拍价：</span></p>
                  </div>
                </div>

                <!-- Unnamed (矩形) -->
                <div id="u123" class="ax_default box_1">
                  <div id="u123_div" class=""></div>
                  <!-- Unnamed () -->
                  <div id="u124" class="text" style="visibility: visible;">
                    <p><span>一口价：</span></p>
                    
                  </div>
                </div>

                <!-- Unnamed (文本框) -->
                <div id="u125" class="ax_default text_field">
                  <input id="u125_input" type="number" name="start" value=""/>
                </div>

                <!-- Unnamed (文本框) -->
                <div id="u126" class="ax_default text_field">
                  <input id="u126_input" type="number" name="end" value=""/>
                </div>
              </div>
            </div>

            <!-- Unnamed (提交按钮) -->
            <div id="u127" class="ax_default html_button">
              <input id="u127_input" type="submit" value="开始拍卖"/>
                </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (我的竞标界面) -->

      <!-- Unnamed (组合) -->
      <div id="u129" class="ax_default ax_default_hidden">

        <!-- Unnamed (矩形) -->
        <div id="u130" class="ax_default box_1">
          <div id="u130_div" class="">
          	<div style="width: 100%;margin-top: 39px;">
									  <table>
										 	<?php if(is_array($mine)): foreach($mine as $key=>$val): ?><tr style="text-align: center;">
										    	<td width="331px"><?php echo ($val['name']); ?></td>
										    	<td width="185px"><?php echo ($val['time']); ?>小时</td>
										    	<td width="283px"><?php echo ($val['admin']); ?></td>
										    	<td width="266px">购买：<?php echo ($val['end']); ?> </td>
										    </tr><?php endforeach; endif; ?>   
										 	<?php if(is_array($mine_jing)): foreach($mine_jing as $key=>$val): ?><tr style="text-align: center;">
										    	<td width="331px"><?php echo ($val['name']); ?></td>
										    	<td width="185px"><?php echo ($val['time']); ?>小时</td>
										    	<td width="283px"><?php echo ($val['admin']); ?></td>
										    	<td width="266px">竞标：<?php echo ($val['start2']); ?> </td>
										    </tr><?php endforeach; endif; ?> 	
									    <?php if(is_array($mine_jing1)): foreach($mine_jing1 as $key=>$val): ?><tr style="text-align: center;">
										    	<td width="331px"><?php echo ($val['name']); ?></td>
										    	<td width="185px"><?php echo ($val['time']); ?>小时</td>
										    	<td width="283px"><?php echo ($val['admin']); ?></td>
										    	<td width="266px">竞标：<?php echo ($val['start1']); ?> </td>
										    </tr><?php endforeach; endif; ?> 	
										 </table>
									</div>
          </div>
          <!-- Unnamed () -->
          <div id="u131" class="text" style="display: none; visibility: hidden">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (矩形) -->
        <div id="u132" class="ax_default box_1">
          <div id="u132_div" class=""></div>
          <!-- Unnamed () -->
          <div id="u133" class="text" style="display: none; visibility: hidden">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (矩形) -->
        <div id="u134" class="ax_default box_1">
          <div id="u134_div" class=""></div>
          <!-- Unnamed () -->
          <div id="u135" class="text" style="visibility: visible;">
            <p><span>物品名称</span></p>
          </div>
        </div>

        <!-- Unnamed (矩形) -->
        <div id="u136" class="ax_default box_1">
          <div id="u136_div" class=""></div>
          <!-- Unnamed () -->
          <div id="u137" class="text" style="visibility: visible;">
            <p><span>剩余时间</span></p>
          </div>
        </div>

        <!-- Unnamed (矩形) -->
        <div id="u138" class="ax_default box_1">
          <div id="u138_div" class=""></div>
          <!-- Unnamed () -->
          <div id="u139" class="text" style="visibility: visible;">
            <p><span>拍卖人</span></p>
          </div>
        </div>

        <!-- Unnamed (矩形) -->
        <div id="u140" class="ax_default box_1">
          <div id="u140_div" class=""></div>
          <!-- Unnamed () -->
          <div id="u141" class="text" style="visibility: visible;">
            <p><span>购买/竞标</span></p>
          </div>
        </div>
      </div>
    </div>
      
  </body>
</html>