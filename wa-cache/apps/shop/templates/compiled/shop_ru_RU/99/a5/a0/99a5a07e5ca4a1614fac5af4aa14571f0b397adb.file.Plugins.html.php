<?php /* Smarty version Smarty-3.1.14, created on 2016-04-13 21:16:26
         compiled from "/var/www/test/wa-system/plugin/templates/Plugins.html" */ ?>
<?php /*%%SmartyHeaderCode:1573628949570e8cfa86be48-24799900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99a5a07e5ca4a1614fac5af4aa14571f0b397adb' => 
    array (
      0 => '/var/www/test/wa-system/plugin/templates/Plugins.html',
      1 => 1460565538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1573628949570e8cfa86be48-24799900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shadowed' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'container_before_html' => 0,
    'container_class' => 0,
    'installer' => 0,
    'wa_backend_url' => 0,
    'plugins_hash' => 0,
    'plugins' => 0,
    'plugin' => 0,
    'plugin_names' => 0,
    'is_ajax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_570e8cfa94c5f4_34759384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e8cfa94c5f4_34759384')) {function content_570e8cfa94c5f4_34759384($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['shadowed']->value)){?><div class="shadowed"><?php }?>
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/lib/codemirror.css" type="text/css" rel="stylesheet"/>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/lib/codemirror.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/mode/xml/xml.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/mode/javascript/javascript.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/mode/css/css.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

<?php $_smarty_tpl->tpl_vars['plugin_names'] = new Smarty_variable(array(), null, 0);?>

<style>
    .wa-inner-sidebar { padding-top: 18px; }
    .wa-inner-sidebar ul.menu-v li.selected a { background: #e7e7e7; }
    .wa-plugins form { overflow: visible; }
    #wa-plugin-list h6 { margin-left: 5px; }
</style>

<?php if (!empty($_smarty_tpl->tpl_vars['container_before_html']->value)){?><?php echo $_smarty_tpl->tpl_vars['container_before_html']->value;?>
<?php }?>

<div id="wa-plugins-container"<?php if (!empty($_smarty_tpl->tpl_vars['container_class']->value)){?> class="<?php echo $_smarty_tpl->tpl_vars['container_class']->value;?>
"<?php }?>>

    <div class="sidebar left200px">
        <div class="wa-inner-sidebar">
            <ul class="menu-v with-icons stack" id="wa-plugin-list">
                <?php if (!empty($_smarty_tpl->tpl_vars['installer']->value)){?>
                <li id="wa-plugins-list" class="selected bottom-padded" data-url="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
installer/?module=plugins&action=view&slug=<?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['plugins_hash']->value;?>
/"><i class="icon16 star"></i>Популярные плагины</a>
                </li>
                <?php if (!empty($_smarty_tpl->tpl_vars['plugins']->value)){?><h6 class="heading">Установлены</h6><?php }?>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
                <?php $_smarty_tpl->createLocalArrayVariable('plugin_names', null, 0);
$_smarty_tpl->tpl_vars['plugin_names']->value[$_smarty_tpl->tpl_vars['plugin']->value['id']] = htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
                <li id="plugin-<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['custom_settings_url'])){?>data-url="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['custom_settings_url'];?>
"<?php }elseif(!empty($_smarty_tpl->tpl_vars['plugin']->value['custom_settings'])){?>data-settings="1"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['plugins_hash']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
/">
                    <i class="icon16<?php if (!isset($_smarty_tpl->tpl_vars['plugin']->value['img'])){?> plugins<?php }else{ ?>" style="background-image: url('<?php echo wa_url();?>
<?php echo $_smarty_tpl->tpl_vars['plugin']->value['img'];?>
'); background-size: 16px 16px;<?php }?>"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['description'])){?>
                    <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <?php }?>
                </a>
                </li>
                <?php } ?>
            </ul>
            <?php if (empty($_smarty_tpl->tpl_vars['plugins']->value)){?>
            
            <div class="align-center hint hr block double-padded">
                <p>
                    Плагины не установлены.
                </p>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="content left200px blank bordered-left">
        <div class="block double-padded" id="wa-plugins-content">
            <span><?php if (!empty($_smarty_tpl->tpl_vars['plugins']->value)||!empty($_smarty_tpl->tpl_vars['installer']->value)){?>Загрузка...<i class="icon16 loading"></i><?php }?></span>
        </div>
        <div class="clear-both"></div>
    </div>
</div>

<script type="text/javascript">
(function ($) {
    $.plugins = {
        options: {
            loading: '<i class="icon16 loading"></i>',
            path: '<?php echo $_smarty_tpl->tpl_vars['plugins_hash']->value;?>
/',
            useIframeTransport: false
        },
        path: {
            plugin: false,
            tail: null,
            params: {

            }
        },
        icon: {
            submit: '<i style="vertical-align:middle" class="icon16 loading"></i>',
            success: '<i style="vertical-align:middle" class="icon16 yes"></i>',
            error: '<i style="vertical-align:middle" class="icon16 no"></i>'
        },

        ready: false,
        $menu: null,
        timer: null,

        init: function (options) {
            this.options = $.extend(this.options, options || { });
            if (!this.ready) {
                this.ready = true;
                this.$menu = $('#wa-plugin-list');

                // Set up AJAX to never use cache
                $.ajaxSetup({
                    cache: false
                });

                $.wa.errorHandler = function (xhr) {
                    if ((xhr.status === 403) || (xhr.status === 404)) {
                        var text = $(xhr.responseText);
                        if (text.find('.dialog-content').length) {
                            text = $('<div class="block double-padded"></div>').append(text.find('.dialog-content *'));

                        } else {
                            text = $('<div class="block double-padded"></div>').append(text.find(':not(style)'));
                        }
                        $("#wa-plugins-content").empty().append(text);
                        return false;
                    }
                    return true;
                };

                this.dispatch(location.hash, true);

                if (this.$menu.find('> li:not(#wa-plugins-list) > a').length) {
                    this.$menu.sortable({
                        containment: 'parent',
                        distance: 5,
                        items: '> li:not(#wa-plugins-list)',
                        tolerance: 'pointer',
                        update: $.plugins.sortHandler
                    });
                }
            }
        },

        parsePath: function (path) {
            path = path.replace(new RegExp('^.*' + this.options.path), '');
            return {
                plugin: path.replace(/\/.*$/, '') || null,
                tail: path.replace(/^[^\/]+\//, '').replace(/[\w_\-]+=.*$/, '').replace(/\/$/, '') || null,
                raw: path
            };
        },

        dispatch: function (hash, force) {
            var $plugin;
            // in specific plugin inline script set it flag to true for iframe form posting
            this.options.useIframeTransport = false;

            if (hash === undefined) {
                hash = window.location.hash;
            }
            if (!hash) {
                $plugin = this.$menu.find('li:first > a:first');
                if ($plugin.length) {
                    window.location.hash = hash = $plugin.attr('href');
                }
            }

            var path = this.parsePath(hash);
            this.path.dispatch = path;
            var load = force || (path.plugin !== this.path.plugin);


            /* change plugins section */
            if (load) {
                var $content = $('#wa-plugins-content');
                this.path.tail = null;

                $plugin = $(path.plugin ? ("#plugin-" + path.plugin) : '#wa-plugins-list');
                if ($plugin.length) {
                    var url = this.helper.getContentUrl($plugin, path);
                    if (url) {
                        var self = this;
                        $content.html(this.options.loading);
                        $content.load(url, function () {
                            self.path.plugin = path.plugin;

                            // update title
                            if (self.path.plugin) {
                                document.title = self.options.plugin_names[self.path.plugin] + self.options.title_suffix;
                            } else {
                                document.title = $_('Plugins') + self.options.title_suffix;
                            }

                            self.$menu.find('li.selected').removeClass('selected');
                            var href = self.options.path + (self.path.plugin ? self.path.plugin + '/' : '');
                            self.$menu.find('a[href="' + href + '"]').parents('li').addClass('selected');

                            if (!self.options.useIframeTransport) {
                                $('#plugins-settings-form').submit(function () {
                                    self.saveHandlerAjax(this);
                                    return false;
                                });
                            } else {
                                $('#plugins-settings-form').submit(function () {
                                    self.saveHandlerIframe(this);
                                });
                            }

                        });
                    }
                }
            }
        },

        saveHandlerIframe: function (form) {
            var self = this;
            this.message('submit');
            $("#plugins-settings-iframe").one('load', function () {
                var r = null;
                try {
                    r = $.parseJSON($(this).contents().find('body').html());
                } catch (e) {
                }
                if (r && r.status == 'ok') {
                    var message = 'Сохранено';
                    if (r.data && r.data.message) {
                        message = r.data.message;
                    }
                    self.message('success', message);
                    $(self).trigger('success', [r]);
                } else {
                    self.message('error', r && r.errors || 'parsererror');
                    $(self).trigger('error', [r]);
                }
            });
        },

        saveHandlerAjax: function (form) {
            var self = this;
            this.message('submit');
            var $form = $(form);
            $.ajax({
                type: 'POST',
                url: $form.attr('action'),
                data: $form.serializeArray(),
                iframe: true,
                dataType: 'json',
                success: function (data, textStatus, jqXHR) {
                    if (data && (data.status == 'ok')) {
                        var message = 'Сохранено';
                        if (data.data && data.data.message) {
                            message = data.data.message;
                        }
                        self.message('success', message);
                        $(self).trigger('success', [data]);
                    } else {
                        self.message('error', data.errors || []);
                        $(self).trigger('error', [data]);
                    }
                },
                error: function (jqXHR, errorText) {
                    self.message('error', [
                        [errorText]
                    ]);
                    $(self).trigger('error', [errorText]);
                }
            });
        },

        helper: {
            getContentUrl: function ($item, path) {

                var url = '';
                if ($item.data('url')) {
                    url = $item.data('url');
                } else if ($item.data('settings')) {
                    url = '?plugin=' + path.plugin + '&module=settings';
                } else if (path.plugin) {
                    url = '?module=plugins&action=settings&id=' + path.plugin;
                }
                return url;
            }
        },

        message: function (status, message) {
            /* enable previos disabled inputs */

            var $container = $('#plugins-settings-form-status');
            $container.empty().show();
            var $parent = $container.parents('div.value');
            $parent.removeClass('errormsg successmsg status');

            if (this.timer) {
                clearTimeout(this.timer);
            }
            var timeout = null;
            $container.append(this.icon[status] || '');
            switch (status) {
                case 'submit':
                    $parent.addClass('status');
                    break;
                case 'error':
                    $parent.addClass('errormsg');
                    for (var i = 0; i < message.length; i++) {
                        $container.append(message[i][0]);
                    }
                    timeout = 20000;
                    break;
                case 'success':
                    if (message) {
                        $parent.addClass('successmsg');
                        $container.append(message);
                    }
                    timeout = 3000;
                    break;
            }
            if (timeout) {
                this.timer = setTimeout(function () {
                    $parent.removeClass('errormsg successmsg status');
                    $container.empty().show();
                }, timeout);
            }
        },
        sortHandler: function (event, ui) {
            var self = this;
            $.ajax({
                type: 'POST',
                url: '?module=plugins&action=sort',
                data: {
                    slug: $(ui.item).attr('id').replace(/^plugin-/, ''),
                    pos: $(ui.item).index()
                },
                success: function (data, textStatus, jqXHR) {
                    if (!data || !data.status || (data.status != "ok") || !data.data || (data.data != "ok")) {
                        self.$menu.sortable('cancel');
                    }
                },
                error: function () {
                    self.$menu.sortable('cancel');
                }
            });
        }
    };

    $.plugins.init({
        'loading': '<?php echo strtr("Загрузка...<i class=\"icon16 loading\"></i>", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'title_suffix': ' — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'plugin_names': <?php echo json_encode($_smarty_tpl->tpl_vars['plugin_names']->value);?>

    });
    <?php if (empty($_smarty_tpl->tpl_vars['is_ajax']->value)){?>
        $('#wa-plugin-list a').click(function  () {
            $.plugins.dispatch($(this).attr('href'), true);
        });
    <?php }?>
})(jQuery);
</script>
<?php if (!empty($_smarty_tpl->tpl_vars['shadowed']->value)){?></div><?php }?><?php }} ?>