<?php
define('VRESION','1.4.03.30');
function themeConfig($form) {

    $navcon = new Typecho_Widget_Helper_Form_Element_Radio('navcon', 
    array(
        'display' => _t('显示'),  
        'close' => _t('关闭')
        ), 
    'close', 
    _t('导航栏动画'), _t(''));
    $form->addInput($navcon);

    $picCat = new Typecho_Widget_Helper_Form_Element_Text('picCat',NULL, NULL,'图片展现分类目录', '填写对应分类的 id（例如 1,2）');
    $picCat->input->setAttribute('class', 'mini');
    $form->addInput($picCat->addRule('isInteger', '请填入数字'));

    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('网站主标题'), _t(''));
    $form->addInput($logo);

    $small_title = new Typecho_Widget_Helper_Form_Element_Text('small_title', NULL, NULL, _t('网站副标题'), _t(''));
    $form->addInput($small_title);

    $logo_img = new Typecho_Widget_Helper_Form_Element_Text('logo_img', NULL, NULL, _t('网站logo'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logo_img);

    $sticky_1 = new Typecho_Widget_Helper_Form_Element_Text('sticky_1',NULL, NULL,'置顶主题ID', '填写对应主题的 id 即可使某些分类的文章在置顶首页显示（例如 1）。');
    $sticky_1->input->setAttribute('class', 'mini');
    $form->addInput($sticky_1->addRule('isInteger', '请填入数字'));

    $sticky_2 = new Typecho_Widget_Helper_Form_Element_Text('sticky_2',NULL, NULL,'置顶主题ID', '填写对应主题的 id 即可使某些分类的文章在置顶首页显示（例如 1）。');
    $sticky_2->input->setAttribute('class', 'mini');
    $form->addInput($sticky_2->addRule('isInteger', '请填入数字'));

    $sticky_3 = new Typecho_Widget_Helper_Form_Element_Text('sticky_3',NULL, NULL,'置顶主题ID', '填写对应主题的 id 即可使某些分类的文章在置顶首页显示（例如 1）。');
    $sticky_3->input->setAttribute('class', 'mini');
    $form->addInput($sticky_3->addRule('isInteger', '请填入数字'));

    $search_type = new Typecho_Widget_Helper_Form_Element_Text('search_type', NULL, '请输入关键词开始搜索吧', _t('搜索栏中的文字'), _t(''));
    $form->addInput($search_type);

    $search_btn = new Typecho_Widget_Helper_Form_Element_Text('search_btn', NULL, 'SEARCH', _t('搜索按钮文字'), _t(''));
    $form->addInput($search_btn);

    /*搜索框开关*/
    $search = new Typecho_Widget_Helper_Form_Element_Radio('search', 
    array(
        'display' => _t('显示'),  
        'close' => _t('关闭')
        ), 
    'display', 
    _t('搜索框隐藏开关'), _t(''));
    $form->addInput($search);

    /*顶部按钮扩展区域*/
    $topbtn_display = new Typecho_Widget_Helper_Form_Element_Radio('topbtn_display', 
    array(
        'display' => _t('显示'),  
        'close' => _t('关闭')
        ), 
    'display', 
    _t('顶部按钮扩展区域'), _t(''));
    $form->addInput($topbtn_display);

    $view_num = new Typecho_Widget_Helper_Form_Element_Text('view_num',NULL, NULL,'HOT判断标准值', '单篇文章浏览n次后在文章尾部追加"HOT"标识');
    $view_num->input->setAttribute('class', 'mini');
    $form->addInput($view_num->addRule('isInteger', '请填入数字')->addRule('maxLength', '最多包含4个数字', 4)->addRule('required', '请填入数字。'));

    //是否显示浏览次数
    $view_time = new Typecho_Widget_Helper_Form_Element_Radio('view_time', 
    array(
        'display' => _t('显示'),  
        'close' => _t('关闭')
        ), 
    'display', 
    _t('显示浏览次数'), _t('开启显示浏览次数功能后，上面的HOT判断功能会自动失效。HOT标识位置将显示该文章的阅读次数。并且小标签的围观次数将不会再列表页显示'));
    $form->addInput($view_time);

    //是否禁用RSS按钮
    $rss = new Typecho_Widget_Helper_Form_Element_Radio('rss', 
    array(
        'display' => _t('显示'),  
        'close' => _t('关闭')
        ), 
    'display', 
    _t('RSS订阅按钮开关'), _t('如果您不希望在首页导航条上方显示RSS订阅按钮，请点此关闭'));
    $form->addInput($rss);

    $rss_key = new Typecho_Widget_Helper_Form_Element_Text('rss_key', NULL, NULL, _t('QQ订阅key'), _t('可以让用户通过自己的邮箱订阅站点的更新内容，需要至腾讯list邮箱中注册key<a href="http://list.qq.com/" target="_blank">去看看</a>'));
    $form->addInput($rss_key);

    //文章首行缩进
    $page_suo = new Typecho_Widget_Helper_Form_Element_Radio('page_suo', 
    array(
        'display' => _t('启用'),  
        'close' => _t('禁用')
        ), 
    'display', 
    _t('文章首行缩进'), _t('开启后，所有文章内容讲自动缩进2em（两个中文汉字宽度）'));
    $form->addInput($page_suo);

    //文章列表摘要超链接
    $dis_href = new Typecho_Widget_Helper_Form_Element_Radio('dis_href', 
    array(
        'display' => _t('使用'),  
        'close' => _t('关闭')
        ), 
    'display', 
    _t('文章列表摘要超链接'), _t('禁用后首页、分类页文章列表的摘要部分将不再具有超链接。只能通过点击文章标题和read more进入文章内页。'));
    $form->addInput($dis_href);

    $con_height = new Typecho_Widget_Helper_Form_Element_Text('con_height',NULL, '140','首页框体高度', '在1366px像素以上的双栏模式下，可以自定义列表框的高度，默认<strong>140</strong>px');
    $con_height->input->setAttribute('class', 'mini');
    $form->addInput($con_height->addRule('isInteger', '请填入数字')->addRule('minLength', '至少包含3个数字', 3)->addRule('maxLength', '最多包含4个数字', 4)->addRule('required', '请填入数字。'));

    $top_right_btn_text = new Typecho_Widget_Helper_Form_Element_Text('top_right_btn_text', NULL, '欢迎投稿', _t('订阅左侧按钮文字'), _t(''));
    $form->addInput($top_right_btn_text);

    $top_right_btn_url = new Typecho_Widget_Helper_Form_Element_Text('top_right_btn_url',NULL, NULL,'订阅左侧按钮链接', '');
    $top_right_btn_url->input->setAttribute('class', 'w-100 mono');
    $form->addInput($top_right_btn_url->addRule('url', '请填写一个合法的URL地址'));

    $top_right_btn_title = new Typecho_Widget_Helper_Form_Element_Text('top_right_btn_title', NULL, NULL, _t('订阅左侧按钮超链接title'), _t(''));
    $form->addInput($top_right_btn_title);

    /** 超链跳转方式 */
    $top_right_btn_rel = new Typecho_Widget_Helper_Form_Element_Select('top_right_btn_rel', 
    array(
        'nofollow' => _t('nofollow'),
        'external nofollow' => _t('external nofollow'),
        ),
    'nofollow',
    _t('超链跳转方式'), _t('默认为nofollow'));
    $form->addInput($top_right_btn_rel);

    /** 超链跳转方式 */
    $top_right_btn_target = new Typecho_Widget_Helper_Form_Element_Select('top_right_btn_target', 
    array(
        '_self' => _t('_self'),
        '_blank' => _t('_blank'),
        'new' => _t('new'),
        '_parent' => _t('_parent'),
        '_top' => _t('_top'),
        ),
    '_self',
    _t('超链跳转方式'), _t('默认为_self'));
    $form->addInput($top_right_btn_target);

    $top_ac = new Typecho_Widget_Helper_Form_Element_Textarea('top_ac', NULL, NULL, _t('站点公告'), _t('每条一行(回车)，显示在导航条右上方，支持HTML代码。（建议不要再这里插入一些影响布局的代码）'));
    $form->addInput($top_ac);

    $topicUrl = new Typecho_Widget_Helper_Form_Element_Text('topicUrl',NULL, NULL,'推荐文章地址', '');
    $topicUrl->input->setAttribute('class', 'w-100 mono');
    $form->addInput($topicUrl->addRule('url', '请填写一个合法的URL地址'));

    $topicTitle = new Typecho_Widget_Helper_Form_Element_Text('topicTitle', NULL, NULL, _t('推荐文章标题'), _t(''));
    $form->addInput($topicTitle);

    $dis_num = new Typecho_Widget_Helper_Form_Element_Text('dis_num',NULL, '150','自动摘要字符数', '请根据需要输入整数以控制首页摘要的字符数量，如不填则使用默认策略');
    $dis_num->input->setAttribute('class', 'mini');
    $form->addInput($dis_num->addRule('isInteger', '请填入数字')->addRule('minLength', '至少包含3个数字', 3)->addRule('maxLength', '最多包含4个数字', 4)->addRule('required', '请填入数字。'));

    $page_width = new Typecho_Widget_Helper_Form_Element_Text('page_width', NULL, NULL, _t('页面宽度限制'), _t('设置页面宽度后，PC页面会按照您设定宽度展现页面。强烈建议禁用自动摘要后配合此功能调整页面。（请填入整数，并且宽度设置小于960会出错！）'));
    $page_width->input->setAttribute('class', 'mini');
    $form->addInput($page_width->addRule('isInteger', '请填入数字'));

    $readmore = new Typecho_Widget_Helper_Form_Element_Text('readmore', NULL, 'Read More >', _t('read more文字'), _t(''));
    $form->addInput($readmore);

    $juankuan = new Typecho_Widget_Helper_Form_Element_Text('juankuan', NULL, '如果您觉得这篇文章有用处，请支持作者！鼓励作者写出更好更多的文章！', _t('捐款说明文字'), _t(''));
    $form->addInput($juankuan);

    $zhifu_url = new Typecho_Widget_Helper_Form_Element_Text('zhifu_url',NULL, NULL,'捐赠功能的支付宝收款地址', '如果没有收款地址请<a href="https://me.alipay.com/" target="_blank">点击这里</a>开通');
    $zhifu_url->input->setAttribute('class', 'w-100 mono');
    $form->addInput($zhifu_url->addRule('required', '请填入收款地址。')->addRule('url', '请填写一个合法的URL地址'));

    $zhuanzai = new Typecho_Widget_Helper_Form_Element_Textarea('zhuanzai', NULL, NULL, _t('转载请注明文字'), _t('用于自定义转载申明的文字描述,可以插入html代码'));
    $form->addInput($zhuanzai);

    $fenxiang = new Typecho_Widget_Helper_Form_Element_Textarea('fenxiang', NULL, NULL, _t('第三方分享代码'), _t('文章结尾处可以插入例如<a href="http://share.baidu.com/" target="_blank">百度分享</a>之类的代码，方便用户将文章分享到社交平台'));
    $form->addInput($fenxiang);

    $load_speed = new Typecho_Widget_Helper_Form_Element_Text('load_speed',NULL, '1000','loading条加载速度', '必须是整数，单位为毫秒。 （1秒=1000毫秒）');
    $load_speed->input->setAttribute('class', 'mini');
    $form->addInput($load_speed->addRule('isInteger', '请填入数字')->addRule('minLength', '至少包含4个数字', 4)->addRule('maxLength', '最多包含5个数字', 5)->addRule('required', '请填入数字。'));

    $sidebar_ad_1 = new Typecho_Widget_Helper_Form_Element_Textarea('sidebar_ad_1', NULL, NULL, _t('侧栏广告⑴_规格360*300'), _t('显示在最新文章上方，支持HTML代码。（建议不要再这里插入一些影响布局的代码）'));
    $form->addInput($sidebar_ad_1);

    $sidebar_ad_2 = new Typecho_Widget_Helper_Form_Element_Textarea('sidebar_ad_2', NULL, NULL, _t('侧栏广告⑵_规格300*250'), _t('显示在其它杂项下方，支持HTML代码。（建议不要再这里插入一些影响布局的代码）'));
    $form->addInput($sidebar_ad_2);

    $post_ad_1 = new Typecho_Widget_Helper_Form_Element_Textarea('post_ad_1', NULL, NULL, _t('文章页面右侧广告位'), _t('建议是矩形广告'));
    $form->addInput($post_ad_1);

    $post_ad_2 = new Typecho_Widget_Helper_Form_Element_Textarea('post_ad_2', NULL, NULL, _t('文章页面相关阅读上方广告位'), _t('建议为横幅广告'));
    $form->addInput($post_ad_2);

    /** 页面加载耗时 */
    $sider_roll = new Typecho_Widget_Helper_Form_Element_Select('sider_roll', 
    array(
        '' => _t('--未启用--'),
        'frontloginblock' => _t('登录信息框'),
        'randomposts' => _t('推荐阅读'),
        'views' => _t('最热文章'),
        'recent-posts' => _t('最近更新'),
        'tag_cloud' => _t('标签'),
        'categories' => _t('分类'),
        'archives' => _t('归档'),
        'linkcat' => _t('友情连接'),
        'siteinfowidget' => _t('站点统计'),
        'meta' => _t('其他'),
        'text-1' => _t('侧栏广告位⑴'),
        'text-2' => _t('侧栏广告位⑵'),
        ),
    'randomposts',
    _t('右边栏跟随屏幕滚动模块设置'), _t('选择需要跟随滚动的模块ID(选项模块对应由上至下的顺序)'));    
    $form->addInput($sider_roll);

    /** 页面加载耗时 */
    $load_time = new Typecho_Widget_Helper_Form_Element_Radio('load_time', 
    array(
        'display' => _t('显示'),
        'close' => _t('关闭'),
        ),
    'display',
    _t('页面加载耗时'), _t('开启后会在页面右下角显示当前页面加载所耗时间，是对当前服务器性能进行评估的重要指标。'));    
    $form->addInput($load_time);

    $buildDate = new Typecho_Widget_Helper_Form_Element_Text('buildDate',NULL, '2013-12-12','建站日期', '默认格式为：2012-12-12');
    $buildDate->input->setAttribute('class', 'mini');
    $form->addInput($buildDate->addRule('minLength', '至少包含8个字符', 8)->addRule('maxLength', '最多包含11个字符', 11)->addRule('required', '请填入数字。'));

    $icp = new Typecho_Widget_Helper_Form_Element_Text('icp',NULL, NULL,'备案号', '默认格式为：粤ICP备xxxxx号');
    $icp->input->setAttribute('class', 'mini');
    $form->addInput($icp->addRule('minLength', '至少包含14个字符', 14)->addRule('maxLength', '最多包含19个字符', 19));

    $copyright = new Typecho_Widget_Helper_Form_Element_Text('copyright', NULL, '2013-2014', _t('版权信息'), _t(''));
    $form->addInput($copyright);

    $sitemap = new Typecho_Widget_Helper_Form_Element_Text('sitemap',NULL, NULL,'网站地图', '填写您的网站地图地址');
    $sitemap->input->setAttribute('class', 'w-100 mono');
    $form->addInput($sitemap->addRule('url', '请填入一个网站地图地址'));

    $tongji = new Typecho_Widget_Helper_Form_Element_Textarea('tongji', NULL, NULL, _t('第三方统计'), _t('插入统计代码，也可以插入其他代码'));
    $form->addInput($tongji);

    $duoshuo_id = new Typecho_Widget_Helper_Form_Element_Text('duoshuo_id',NULL, NULL,'多说二级域名', '当前站点注册的多说二级域名。例如：你注册了http://apitest.duoshuo.com/时，多说二级域名为<strong>apitest</strong>。');
    $duoshuo_id->input->setAttribute('class', 'w-100 mono');
    $form->addInput($duoshuo_id->addRule('required', '请填入当前站点多说二级域名'));

    /*版权信息显示*/
    $banquan = new Typecho_Widget_Helper_Form_Element_Radio('banquan', 
    array(
        'display' => _t('显示'),  
        'close' => _t('关闭')
        ), 
    'close', 
    _t('主题版权信息链接开关'), _t('如果您确实出于SEO需要，减少权重流失。可以点此关掉主题右下角版权信息的超链接，只显示版权文字信息。（此超链接只会在首页显示，内页只显示版权文字）
PS:如果可以的话，希望还是请保留版权信息以尊重作者的劳动成果。'));
    $form->addInput($banquan);

    $css = new Typecho_Widget_Helper_Form_Element_Textarea('css', NULL, 'input[type="submit"]{height:33px;background:#1069cb;color:#FFF;border:0;cursor:pointer;line-height:33px;padding:0 15px}', _t('自定义CSS'), _t('此处的样式将会替换默认的style.css中的样式，并且其值会保存在数据库中，升级主题不会对自定义过的样式造成覆盖。'));
    $form->addInput($css);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array(
    'ShowRandomPosts' => _t('显示随机文章'),
    'ShowHotPosts' => _t('显示热门文章'),
    'ShowCategory' => _t('显示分类'),
    'ShowTag' => _t('显示标签'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRandomPosts', 'ShowHotPosts', 'ShowCategory', 'ShowTag', 'ShowArchive','ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}
/**
* 判断时间区间
*
* 使用方法  if(timeZone($this->date->timeStamp)) echo 'ok';
*/
function timeZone($from){
$now = new Typecho_Date(Typecho_Date::gmtTime());
return $now->timeStamp - $from < 3*24*60*60 ? true : false;
}

/**
 * 載入耗用時間
 *
 * 语法: <?php echo timer_stop() ?>
 * 
 */
function timer_start() {
  global $timestart;
  $mtime = explode( ' ', microtime() );
  $timestart = $mtime[1] + $mtime[0];
  return true;
}
timer_start();
 
function timer_stop( $display = 0, $precision = 3 ) {
  global $timestart, $timeend;
  $mtime = explode( ' ', microtime() );
  $timeend = $mtime[1] + $mtime[0];
  $timetotal = $timeend - $timestart;
  $r = number_format( $timetotal, $precision );
  if ( $display )
    echo $r;
  return $r;
}

/**
 * 单独输出文章分类链接
 *
 * 语法: <?php category($this); ?>
 * 
 */
function category($widget, $split = ',', $default = NULL)
    {
        $categories = $widget->categories;
        if ($categories) {
            $result = array();

            foreach ($categories as $category) {
                $result[] = $category['permalink'];
            }

            echo implode($split, $result);
        } else {
            echo $default;
        }
    }

/**
 * 显示下一个内容的标题链接
 *
 * 语法: <?php theNext($this); ?>
 * 
 * @access public
 * @param string $default 如果没有下一篇,显示的默认文字
 * @return void
 */
function theNext($widget, $default = NULL)
{
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
              ->where('table.contents.created > ?', $widget->created)
              ->where('table.contents.status = ?', 'publish')
              ->where('table.contents.type = ?', $widget->type)
              ->where('table.contents.password IS NULL')
              ->order('table.contents.created', Typecho_Db::SORT_ASC)
              ->limit(1);
    $content = $db->fetchRow($sql);
    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" rel="next">' . $content['title'] . '<span class="meta-nav">&rArr;</span></a>';
        echo $link;
    } else {
        echo $default;
    }
}

/**
 * 显示上一个内容的标题链接
 *
 * 语法: <?php thePrev($this); ?>
 * 
 * @access public
 * @param string $default 如果没有下一篇,显示的默认文字
 * @return void
 */
function thePrev($widget, $default = NULL)
{
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
              ->where('table.contents.created < ?', $widget->created)
              ->where('table.contents.status = ?', 'publish')
              ->where('table.contents.type = ?', $widget->type)
              ->where('table.contents.password IS NULL')
              ->order('table.contents.created', Typecho_Db::SORT_DESC)
              ->limit(1);
    $content = $db->fetchRow($sql);
    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" rel="prev"><span class="meta-nav">&lArr;</span>' . $content['title'] . '</a>';
        echo $link;
    } else {
        echo $default;
    }
}

/**
* 获取标签数目
* 
* 语法: <?php echo tagsNum(); ?>
* 
* @access protected
* @return integer
*/
function tagsNum($display = true)
{
        $db = Typecho_Db::get();
        $total_views = $db->fetchObject($db->select(array('COUNT(mid)' => 'num'))
              ->from('table.metas')
              ->where('table.metas.type = ?', 'tag'))->num;
        if($display) {
			echo $total_views;
		} else {
			return $total_views;
		}


}

/**
* 输出随机文章
*
* 语法: <?php theme_random_posts();?>
*
* @access protected
* @return integer
*/
    function random_posts($limit= 10,$format='<li><a href="{permalink}">{title}</a></li>')
    { 
        $db = Typecho_Db::get(); 
        $limit = is_numeric($limit) ? $limit : 10;
        $result = $db->fetchAll($db->select()->from('table.contents') 
            ->where('status = ?','publish') 
            ->where('type = ?', 'post') 
            ->limit($limit) 
            ->order('RAND()')); 

        foreach($result as $val){ 
            $val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val); 
            echo str_replace(array('{permalink}', '{title}'),array($val['permalink'], $val['title']), $format)."\n\r"; 
        } 
    }
