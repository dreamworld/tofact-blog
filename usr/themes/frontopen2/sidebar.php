<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Front_Open
 * @since Front Open 1.0
 */
?>
    <aside id="primary" class="side" role="complementary">
        <ul class="xoxo">
        <li id="frontloginblock" class="widget-container widget_login">
    <div class="front_login_box">
      <?php 
      Typecho_Widget::widget('Widget_Options')->to($options); 
      Typecho_Widget::widget('Widget_User')->to($user);
      $request = $options->request;
      if($this->user->hasLogin()){
      ?>
      <div class="is_login">
        <div class="user_info">
            <p class="avatar"><a href="<?php $this->options->siteUrl('author/'); ?><?php echo $user->uid().'/'; ?>"><?php echo '<img src="'. ($request->isSecure() ? 'https://secure' : 'http://www') . '.gravatar.com/avatar/' . md5(strtolower($user->mail)) . '?s=96&r=G' .'&d=mm" alt="' . $user->screenName . '"class="avatar" height="96" width="96" />'; ?></a></p>
            <p>欢迎，<?php $this->user->screenName(); ?></p>
            <p style="color:#999"><?php $this->user->name(); ?> [<?php switch ($this->user->group) {
                                    case 'administrator':
                                        _e('管理员');
                                        break;
                                    case 'editor':
                                        _e('编辑');
                                        break;
                                    case 'contributor':
                                        _e('贡献者');
                                        break;
                                    case 'subscriber':
                                        _e('关注者');
                                        break;
                                    case 'visitor':
                                        _e('访问者');
                                        break;
                                    default:
                                        break;
                                } ?>]</p>
            <p><a class="iframe" href="<?php $this->options->adminUrl('profile.php'); ?>" title="编辑个人资料" target="_blank">编辑个人资料</a></p>
        </div>
        <div class="link_tools">
            <a href="<?php $this->options->adminUrl(); ?>" target="_blank" class="iframe" title="仪表盘"><i class="icon-dashboard"></i> 仪表盘</a>
            <?php if( $this->user->group == 'visitor' || $this->user->group == 'subscriber'){}else{?>
            <a href="<?php $this->options->adminUrl('write-post.php'); ?>" target="_blank" class="iframe" title="发布新文章"><i class="icon-plus-sign-alt"></i> 发表文章</a>
            <a href="<?php $this->options->adminUrl('manage-comments.php'); ?>" target="_blank" class="iframe" title="查看<?php $this->options->title();?>中的所有评论"><i class="icon-comments"></i> 查看评论</a>
            <a href="<?php $this->options->adminUrl('manage-posts.php'); ?>" target="_blank" class="iframe" title="查看<?php $this->options->title();?>中的所有文章"><i class="icon-book"></i> 所有文章</a>
            <a href="<?php $this->options->siteUrl('author/'); ?><?php echo $user->uid(); ?>" target="_blank"><i class="icon-home"></i> 我的文章</a>
            <?php }?>
          <div class="cls"></div>
        </div>
        <p class="logout"><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('注 销'); ?></a></p>
        <div class="cls"></div>
      </div>
      <?php }else{?>
        <div class="from_box">
      <form name="login" id="loginform" action="<?php $options->loginAction(); ?>" method="post">
            <p class="p1"><span><i class="icon-user icon-2x"></i></span><input onfocus="this.value = '';" name="name" id="user_login" type="text" class="user_name" value="User Name" /></p>
          <p class="p1" style="margin-bottom:30px;"><span><i class="icon-lock icon-2x"></i></span><input onfocus="this.value = '';this.type = 'password';" name="password" id="user_pass" type="text" class="password" value="Your Password" /></p>
          <p class="p2"><input name="提交" type="submit" class="submit_button" value="登 录" /></p>
          <p class="p3"><?php if($options->allowRegister): ?><span style="float:right"><i class="icon-signin"></i> <a href="<?php $options->registerUrl(); ?>"><?php _e('注册帐号'); ?></a></span><?php endif; ?><span class="keep_me"><label style="display:none;" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"></label><i class="icon-check-empty"></i> 记住我的登录信息</span></p>
          <input type="hidden" name="referer" value="<?php if($this->is('page') || $this->is('post')){$this->permalink();}else{echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];}?>">
          </form>
        </div>
        <script type="text/javascript">
        $('.keep_me').click(function(){
            var nowSet = $(this).find('i').attr('class');
            if(nowSet == "icon-check-empty"){
                $(this).find('i').attr('class','icon-check');
                $(this).find('#rememberme').attr('checked','')
            }else{
                $(this).find('i').attr('class','icon-check-empty');
                $(this).find('#rememberme').removeAttr('checked')
            }
        })
        </script>
      <?php }?>
      </div>
      </li>
        
        <?php if (!empty($this->options->topicUrl) && !empty($this->options->topicTitle)): ?>
                <li class="widget-container widget_text">
                    <div class="textwidget">
                        <div class="d3_btn">
                            <a class="down_theme" href="<?php $this->options->topicUrl() ?>">
                                <p><?php $this->options->topicTitle() ?></p>
                            </a>
                        </div>
                        <div class="cls"></div>
                    </div>
                </li>
        <?php endif; ?>

        <?php if ($this->options->sidebar_ad_1): ?>
        <li id="text-1" class="widget-container widget_text">
            <div class="textwidget">
            <?php $this->options->sidebar_ad_1() ?>
            </div>
        </li>
        <?php endif; ?>

        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRandomPosts', $this->options->sidebarBlock)): ?>
        <li id="randomposts" class="widget-container widget_randomposts">
            <h3 class="widget-title">推荐阅读</h3>
                <ul>
            <?php random_posts(8,'<li><a href="{permalink}" title="{title}">{title}</a></li>');?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if ($this->is('index')): ?>
        <li id="views" class="widget-container widget_views">
            <h3 class="widget-title">最热文章</h3>
                <ul>
            <?php Views_Plugin::theMostViewed(8,'<li><a href="{permalink}" title="{title}">{title}</a> - {views} 次浏览</li>'); ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (!$this->is('index')): ?>
        <li id="recent-posts" class="widget-container widget_recent_entries">
            <h3 class="widget-title">最近更新</h3>
                <ul>
            <?php $this->widget('Widget_Contents_Post_Recent','pageSize=8')
            ->parse('<li><a href="{permalink}" title="阅读 {title} 详细内容">{title}</a><li>'); ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowTag', $this->options->sidebarBlock)): ?>
        <li id="tag_cloud" class="widget-container widget_tag_cloud">
            <h3 class="widget-title">标签</h3>
                <div class="tagcloud">
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 30))->to($tags); ?>
            <?php while($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>" class="tag-link-<?php $tags->mid(); ?>" title="<?php $tags->count(); ?>个话题" style="font-size: 14px;"><?php $tags->name(); ?> (<?php $tags->count(); ?>)</a>
                <?php endwhile; ?>
                </div>
        </li>
        <?php endif; ?>

        <?php if ($this->is('index') && !empty($this->options->duoshuo_id)): ?>
        <li id="ds-recent-visitors" class="widget-container ds-widget-recent-visitors">
            <h3 class="widget-title">最近访客</h3>
                <ul class="ds-recent-visitors" data-num-items="50" data-show-time="0" data-avatar-size="50"></ul>
        </li>
        <script>
            if (typeof DUOSHUO !== 'undefined')
            DUOSHUO.RecentVisitors('.ds-recent-visitors');
        </script>
        <?php endif; ?>

        <?php if ($this->is('index') && !empty($this->options->duoshuo_id)): ?>
        <li id="ds-recent-comments" class="widget-container ds-widget-recent-comments">
            <h3 class="widget-title">近期评论</h3>
                <ul class="ds-recent-comments" data-num-items="5" data-show-avatars="1" data-show-time="1" data-show-title="0" data-show-admin="0" data-avatar-size="30" data-excerpt-length="70"></ul></li>
        <script>
            if (typeof DUOSHUO !== 'undefined')
            DUOSHUO.RecentComments && DUOSHUO.RecentComments('.ds-recent-comments');
        </script>
        <?php endif; ?>

        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <li id="categories" class="widget-container widget_categories">
            <h3 class="widget-title">分类</h3>
                <ul>
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li class="cat-item cat-item-{mid}"><a href="{permalink}" title="查看{name}下的所有文章">{name}</a> ({count})</li>'); ?>
                </ul>
        </li>
        <?php endif; ?>

        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
        <li id="archives" class="widget-container widget_archive">
            <h3 class="widget-title">归档</h3>
            <ul>
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a> ({count})</li>'); ?>
            </ul>
        </li>
        <?php endif; ?>

        <?php if ($this->is('index')): ?>
        <li id="linkcat" class="widget-container widget_links"><h3 class="widget-title">左邻右舍</h3>
            <ul class='xoxo blogroll'>
            <?php Links_Plugin::output("<li><a href=\"{url}\" target=\"_blank\">{name}</a></li>"); ?>
            </ul>
        </li>
        <?php endif; ?>

        <?php if ($this->is('index')): ?>
        <li id="siteinfowidget" class="widget-container widget_links">
                    <h3 class="widget-title">站点统计</h3>
                    <ul class="xoxo siteInfo">
                    <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                        <li>文章总数：<?php $stat->publishedPostsNum() ?>篇</li>
                        <li>分类总数：<?php $stat->categoriesNum() ?>个</li>
                        <li>标签总数：<?php tagsNum() ?>个</li>
                        <li>评论总数：<?php $stat->publishedCommentsNum() ?>条</li>
                        <li>页面总数：<?php $stat->publishedPagesNum() ?>个</li>
                        <li>网站已运行：<?php $this->options->buildDate = empty($this->options->buildDate) ? date("Y-m-d") : $this->options->buildDate; echo floor((time()-strtotime($this->options->buildDate))/86400); ?>天</li>
                    </ul>
        </li>
        <?php endif; ?>

        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
            <li id="meta" class="widget-container">
                <h3 class="widget-title">其他</h3>
                <ul>
           <?php if($this->user->hasLogin()): ?>
                <li><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.typecho.org" target="_blank">Typecho</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if ($this->options->sidebar_ad_2): ?>
        <li id="text-2" class="widget-container widget_text">
            <div class="textwidget">
            <?php $this->options->sidebar_ad_2() ?>
            </div>
        </li>
        <?php endif; ?>

        </ul>
    </aside><!-- #primary .widget-area -->
