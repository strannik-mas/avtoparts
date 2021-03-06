<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnBeforeDocFormSave' => 
    array (
      12 => '12',
      24 => '24',
    ),
    'OnBeforeEmptyTrash' => 
    array (
      12 => '12',
    ),
    'OnBeforeSaveWebPageCache' => 
    array (
      1 => '1',
    ),
    'OnChunkFormPrerender' => 
    array (
      2 => '2',
      5 => '5',
    ),
    'OnDocFormPrerender' => 
    array (
      6 => '6',
      2 => '2',
      5 => '5',
      24 => '24',
      12 => '12',
    ),
    'OnDocFormRender' => 
    array (
      12 => '12',
    ),
    'OnDocFormSave' => 
    array (
      25 => '25',
    ),
    'OnDocPublished' => 
    array (
      25 => '25',
    ),
    'OnDocUnPublished' => 
    array (
      25 => '25',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      2 => '2',
    ),
    'OnFileEditFormPrerender' => 
    array (
      2 => '2',
    ),
    'OnHandleRequest' => 
    array (
      8 => '8',
    ),
    'OnLoadWebDocument' => 
    array (
      24 => '24',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      12 => '12',
      2 => '2',
    ),
    'OnManagerPageInit' => 
    array (
      12 => '12',
    ),
    'OnMODXInit' => 
    array (
      1 => '1',
    ),
    'OnPageNotFound' => 
    array (
      24 => '24',
      8 => '8',
    ),
    'OnPluginFormPrerender' => 
    array (
      2 => '2',
      5 => '5',
    ),
    'OnResourceBeforeSort' => 
    array (
      12 => '12',
    ),
    'OnResourceDelete' => 
    array (
      25 => '25',
    ),
    'OnResourceDuplicate' => 
    array (
      24 => '24',
      25 => '25',
    ),
    'OnResourceUndelete' => 
    array (
      25 => '25',
    ),
    'OnRichTextBrowserInit' => 
    array (
      4 => '4',
    ),
    'OnRichTextEditorInit' => 
    array (
      4 => '4',
    ),
    'OnRichTextEditorRegister' => 
    array (
      2 => '2',
      4 => '4',
    ),
    'OnSiteRefresh' => 
    array (
      1 => '1',
      16 => '16',
    ),
    'OnSnipFormPrerender' => 
    array (
      2 => '2',
      5 => '5',
    ),
    'OnTempFormPrerender' => 
    array (
      2 => '2',
      5 => '5',
    ),
    'OnTVInputPropertiesList' => 
    array (
      6 => '6',
      10 => '10',
    ),
    'OnTVInputRenderList' => 
    array (
      6 => '6',
      10 => '10',
    ),
    'OnTVOutputRenderList' => 
    array (
      10 => '10',
    ),
    'OnTVOutputRenderPropertiesList' => 
    array (
      10 => '10',
    ),
    'OnWebPageComplete' => 
    array (
      8 => '8',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '1',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnBeforeSaveWebPageCache\':
        if (!empty($modx->config[\'fenom_jscripts\'])) {
            foreach ($modx->config[\'fenom_jscripts\'] as $key => $value) {
                unset($modx->resource->_jscripts[$key]);
            }
            $modx->resource->_jscripts = array_values($modx->resource->_jscripts);
        }
        if (!empty($modx->config[\'fenom_sjscripts\'])) {
            foreach ($modx->config[\'fenom_sjscripts\'] as $key => $value) {
                unset($modx->resource->_sjscripts[$key]);
            }
            $modx->resource->_sjscripts = array_values($modx->resource->_sjscripts);
        }
        if (!empty($modx->config[\'fenom_loadedscripts\'])) {
            foreach ($modx->config[\'fenom_loadedscripts\'] as $key => $value) {
                unset($modx->resource->_loadedjscripts[$key]);
            }
        }
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_default\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        switch (true) {
            case $mimeType == \'text/html\' && $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $mimeType == \'text/html\' && $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
        }

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'TinyMCE',
      'description' => 'TinyMCE 4.3.4-pl plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * TinyMCE RichText Editor Plugin
 *
 * Events: OnRichTextEditorInit, OnRichTextEditorRegister,
 * OnBeforeManagerPageInit, OnRichTextBrowserInit
 *
 * @author Jeff Whitfield <jeff@collabpad.com>
 * @author Shaun McCormick <shaun@collabpad.com>
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package tinymce
 * @subpackage build
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'TinyMCE\');
    return;
}
require_once $modx->getOption(\'tiny.core_path\',null,$modx->getOption(\'core_path\').\'components/tinymce/\').\'tinymce.class.php\';
$tiny = new TinyMCE($modx,$scriptProperties);

$useEditor = $tiny->context->getOption(\'use_editor\',false);
$whichEditor = $tiny->context->getOption(\'which_editor\',\'\');

/* Handle event */
switch ($modx->event->name) {
    case \'OnRichTextEditorInit\':
        if ($useEditor && $whichEditor == \'TinyMCE\') {
            unset($scriptProperties[\'chunk\']);
            if (isset($forfrontend) || $modx->context->get(\'key\') != \'mgr\') {
                $def = $tiny->context->getOption(\'cultureKey\',$tiny->context->getOption(\'manager_language\',\'en\'));
                $tiny->properties[\'language\'] = $modx->getOption(\'fe_editor_lang\',array(),$def);
                $tiny->properties[\'frontend\'] = true;
                unset($def);
            }
            /* commenting these out as it causes problems with richtext tvs */
            //if (isset($scriptProperties[\'resource\']) && !$resource->get(\'richtext\')) return;
            //if (!isset($scriptProperties[\'resource\']) && !$modx->getOption(\'richtext_default\',null,false)) return;
            $tiny->setProperties($scriptProperties);
            $html = $tiny->initialize();
            $modx->event->output($html);
            unset($html);
        }
        break;
    case \'OnRichTextBrowserInit\':
        if ($useEditor && $whichEditor == \'TinyMCE\') {
            $inRevo20 = (boolean)version_compare($modx->version[\'full_version\'],\'2.1.0-rc1\',\'<\');
            $modx->getVersionData();
            $source = $tiny->context->getOption(\'default_media_source\',null,1);
            
            $modx->controller->addHtml(\'<script type="text/javascript">var inRevo20 = \'.($inRevo20 ? 1 : 0).\';MODx.source = "\'.$source.\'";</script>\');
            
            $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/tiny_mce_popup.js\');
            if (file_exists($tiny->config[\'assetsPath\'].\'jscripts/tiny_mce/langs/\'.$tiny->properties[\'language\'].\'.js\')) {
                $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/langs/\'.$tiny->properties[\'language\'].\'.js\');
            } else {
                $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/langs/en.js\');
            }
            $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'tiny.browser.js\');
            $modx->event->output(\'Tiny.browserCallback\');
        }
        return \'\';
        break;

   default: break;
}
return;',
      'locked' => '0',
      'properties' => 'a:39:{s:22:"accessibility_warnings";a:7:{s:4:"name";s:22:"accessibility_warnings";s:4:"desc";s:315:"If this option is set to true some accessibility warnings will be presented to the user if they miss specifying that information. This option is set to true by default, since we should all try to make this world a better place for disabled people. But if you are annoyed with the warnings, set this option to false.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"apply_source_formatting";a:7:{s:4:"name";s:23:"apply_source_formatting";s:4:"desc";s:229:"This option enables you to tell TinyMCE to apply some source formatting to the output HTML code. With source formatting, the output HTML code is indented and formatted. Without source formatting, the output HTML is more compact. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"button_tile_map";a:7:{s:4:"name";s:15:"button_tile_map";s:4:"desc";s:338:"If this option is set to true TinyMCE will use tiled images instead of individual images for most of the editor controls. This produces faster loading time since only one GIF image needs to be loaded instead of a GIF for each individual button. This option is set to false by default since it doesn\'t work with some DOCTYPE declarations. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:7:"cleanup";a:7:{s:4:"name";s:7:"cleanup";s:4:"desc";s:331:"This option enables or disables the built-in clean up functionality. TinyMCE is equipped with powerful clean up functionality that enables you to specify what elements and attributes are allowed and how HTML contents should be generated. This option is set to true by default, but if you want to disable it you may set it to false.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"cleanup_on_startup";a:7:{s:4:"name";s:18:"cleanup_on_startup";s:4:"desc";s:135:"If you set this option to true, TinyMCE will perform a HTML cleanup call when the editor loads. This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"convert_fonts_to_spans";a:7:{s:4:"name";s:22:"convert_fonts_to_spans";s:4:"desc";s:348:"If you set this option to true, TinyMCE will convert all font elements to span elements and generate span elements instead of font elements. This option should be used in order to get more W3C compatible code, since font elements are deprecated. How sizes get converted can be controlled by the font_size_classes and font_size_style_values options.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"convert_newlines_to_brs";a:7:{s:4:"name";s:23:"convert_newlines_to_brs";s:4:"desc";s:128:"If you set this option to true, newline characters codes get converted into br elements. This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"convert_urls";a:7:{s:4:"name";s:12:"convert_urls";s:4:"desc";s:495:"This option enables you to control whether TinyMCE is to be clever and restore URLs to their original values. URLs are automatically converted (messed up) by default because the built-in browser logic works this way. There is no way to get the real URL unless you store it away. If you set this option to false it will try to keep these URLs intact. This option is set to true by default, which means URLs will be forced to be either absolute or relative depending on the state of relative_urls.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"dialog_type";a:7:{s:4:"name";s:11:"dialog_type";s:4:"desc";s:246:"This option enables you to specify how dialogs/popups should be opened. Possible values are "window" and "modal", where the window option opens a normal window and the dialog option opens a modal dialog. This option is set to "window" by default.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{i:0;s:6:"window";s:4:"text";s:6:"Window";}i:1;a:2:{i:0;s:5:"modal";s:4:"text";s:5:"Modal";}}s:5:"value";s:6:"window";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"directionality";a:7:{s:4:"name";s:14:"directionality";s:4:"desc";s:261:"This option specifies the default writing direction. Some languages (Like Hebrew, Arabic, Urdu...) write from right to left instead of left to right. The default value of this option is "ltr" but if you want to use from right to left mode specify "rtl" instead.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"ltr";s:4:"text";s:13:"Left to Right";}i:1;a:2:{s:5:"value";s:3:"rtl";s:4:"text";s:13:"Right to Left";}}s:5:"value";s:3:"ltr";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"element_format";a:7:{s:4:"name";s:14:"element_format";s:4:"desc";s:210:"This option enables control if elements should be in html or xhtml mode. xhtml is the default state for this option. This means that for example &lt;br /&gt; will be &lt;br&gt; if you set this option to "html".";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:5:"xhtml";s:4:"text";s:5:"XHTML";}i:1;a:2:{s:5:"value";s:4:"html";s:4:"text";s:4:"HTML";}}s:5:"value";s:5:"xhtml";s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"entity_encoding";a:7:{s:4:"name";s:15:"entity_encoding";s:4:"desc";s:70:"This option controls how entities/characters get processed by TinyMCE.";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:0:"";s:4:"text";s:4:"None";}i:1;a:2:{s:5:"value";s:5:"named";s:4:"text";s:5:"Named";}i:2;a:2:{s:5:"value";s:7:"numeric";s:4:"text";s:7:"Numeric";}i:3;a:2:{s:5:"value";s:3:"raw";s:4:"text";s:3:"Raw";}}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"force_p_newlines";a:7:{s:4:"name";s:16:"force_p_newlines";s:4:"desc";s:147:"This option enables you to disable/enable the creation of paragraphs on return/enter in Mozilla/Firefox. The default value of this option is true. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"force_hex_style_colors";a:7:{s:4:"name";s:22:"force_hex_style_colors";s:4:"desc";s:277:"This option enables you to control TinyMCE to force the color format to use hexadecimal instead of rgb strings. It converts for example "color: rgb(255, 255, 0)" to "#FFFF00". This option is set to true by default since otherwice MSIE and Firefox would differ in this behavior.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"height";a:7:{s:4:"name";s:6:"height";s:4:"desc";s:38:"Sets the height of the TinyMCE editor.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"400px";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"indentation";a:7:{s:4:"name";s:11:"indentation";s:4:"desc";s:139:"This option allows specification of the indentation level for indent/outdent buttons in the UI. This defaults to 30px but can be any value.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"30px";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"invalid_elements";a:7:{s:4:"name";s:16:"invalid_elements";s:4:"desc";s:163:"This option should contain a comma separated list of element names to exclude from the content. Elements in this list will removed when TinyMCE executes a cleanup.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"nowrap";a:7:{s:4:"name";s:6:"nowrap";s:4:"desc";s:212:"This nowrap option enables you to control how whitespace is to be wordwrapped within the editor. This option is set to false by default, but if you enable it by setting it to true editor contents will never wrap.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"object_resizing";a:7:{s:4:"name";s:15:"object_resizing";s:4:"desc";s:148:"This option gives you the ability to turn on/off the inline resizing controls of tables and images in Firefox/Mozilla. These are enabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"path_options";a:7:{s:4:"name";s:12:"path_options";s:4:"desc";s:119:"Sets a group of options. Note: This will override the relative_urls, document_base_url and remove_script_host settings.";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:11:"docrelative";s:4:"text";s:17:"Document Relative";}i:1;a:2:{s:5:"value";s:12:"rootrelative";s:4:"text";s:13:"Root Relative";}i:2;a:2:{s:5:"value";s:11:"fullpathurl";s:4:"text";s:13:"Full Path URL";}}s:5:"value";s:11:"docrelative";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"plugin_insertdate_dateFormat";a:7:{s:4:"name";s:28:"plugin_insertdate_dateFormat";s:4:"desc";s:53:"Formatting of dates when using the InsertDate plugin.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"%Y-%m-%d";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"plugin_insertdate_timeFormat";a:7:{s:4:"name";s:28:"plugin_insertdate_timeFormat";s:4:"desc";s:53:"Formatting of times when using the InsertDate plugin.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"%H:%M:%S";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"preformatted";a:7:{s:4:"name";s:12:"preformatted";s:4:"desc";s:231:"If you enable this feature, whitespace such as tabs and spaces will be preserved. Much like the behavior of a &lt;pre&gt; element. This can be handy when integrating TinyMCE with webmail clients. This option is disabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:13:"relative_urls";a:7:{s:4:"name";s:13:"relative_urls";s:4:"desc";s:231:"If this option is set to true, all URLs returned from the file manager will be relative from the specified document_base_url. If it is set to false all URLs will be converted to absolute URLs. This option is set to true by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:17:"remove_linebreaks";a:7:{s:4:"name";s:17:"remove_linebreaks";s:4:"desc";s:531:"This option controls whether line break characters should be removed from output HTML. This option is enabled by default because there are differences between browser implementations regarding what to do with white space in the DOM. Gecko and Safari place white space in text nodes in the DOM. IE and Opera remove them from the DOM and therefore the line breaks will automatically be removed in those. This option will normalize this behavior when enabled (true) and all browsers will have a white-space-stripped DOM serialization.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"remove_script_host";a:7:{s:4:"name";s:18:"remove_script_host";s:4:"desc";s:221:"If this option is enabled the protocol and host part of the URLs returned from the file manager will be removed. This option is only used if the relative_urls option is set to false. This option is set to true by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:20:"remove_trailing_nbsp";a:7:{s:4:"name";s:20:"remove_trailing_nbsp";s:4:"desc";s:392:"This option enables you to specify that TinyMCE should remove any traling &nbsp; characters in block elements if you start to write inside them. Paragraphs are default padded with a &nbsp; and if you write text into such paragraphs the space will remain. Setting this option to true will remove the space. This option is set to false by default since the cursor jumps a bit in Gecko browsers.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:4:"skin";a:7:{s:4:"name";s:4:"skin";s:4:"desc";s:330:"This option enables you to specify what skin you want to use with your theme. A skin is basically a CSS file that gets loaded from the skins directory inside the theme. The advanced theme that TinyMCE comes with has two skins, these are called "default" and "o2k7". We added another skin named "cirkuit" that is chosen by default.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"cirkuit";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"skin_variant";a:7:{s:4:"name";s:12:"skin_variant";s:4:"desc";s:403:"This option enables you to specify a variant for the skin, for example "silver" or "black". "default" skin does not offer any variant, whereas "o2k7" default offers "silver" or "black" variants to the default one. For the "cirkuit" skin there\'s one variant named "silver". When creating a skin, additional variants may also be created, by adding ui_[variant_name].css files alongside the default ui.css.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:20:"table_inline_editing";a:7:{s:4:"name";s:20:"table_inline_editing";s:4:"desc";s:231:"This option gives you the ability to turn on/off the inline table editing controls in Firefox/Mozilla. According to the TinyMCE documentation, these controls are somewhat buggy and not redesignable, so they are disabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"theme_advanced_disable";a:7:{s:4:"name";s:22:"theme_advanced_disable";s:4:"desc";s:111:"This option should contain a comma separated list of controls to disable from any toolbar row/panel in TinyMCE.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:19:"theme_advanced_path";a:7:{s:4:"name";s:19:"theme_advanced_path";s:4:"desc";s:331:"This option gives you the ability to enable/disable the element path. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to "true" by default. Setting this option to "false" will effectively hide the path tool, though it still takes up room in the Status Bar.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:32:"theme_advanced_resize_horizontal";a:7:{s:4:"name";s:32:"theme_advanced_resize_horizontal";s:4:"desc";s:319:"This option gives you the ability to enable/disable the horizontal resizing. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom" and when the theme_advanced_resizing is set to true. This option is set to true by default, allowing both resizing horizontal and vertical.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"theme_advanced_resizing";a:7:{s:4:"name";s:23:"theme_advanced_resizing";s:4:"desc";s:216:"This option gives you the ability to enable/disable the resizing button. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:33:"theme_advanced_statusbar_location";a:7:{s:4:"name";s:33:"theme_advanced_statusbar_location";s:4:"desc";s:257:"This option enables you to specify where the element statusbar with the path and resize tool should be located. This option can be set to "top" or "bottom". The default value is set to "top". This option can only be used when the theme is set to "advanced".";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"top";s:4:"text";s:3:"Top";}i:1;a:2:{s:5:"value";s:6:"bottom";s:4:"text";s:6:"Bottom";}}s:5:"value";s:6:"bottom";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"theme_advanced_toolbar_align";a:7:{s:4:"name";s:28:"theme_advanced_toolbar_align";s:4:"desc";s:187:"This option enables you to specify the alignment of the toolbar, this value can be "left", "right" or "center" (the default). This option can only be used when theme is set to "advanced".";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:6:"center";s:4:"text";s:6:"Center";}i:1;a:2:{s:5:"value";s:4:"left";s:4:"text";s:4:"Left";}i:2;a:2:{s:5:"value";s:5:"right";s:4:"text";s:5:"Right";}}s:5:"value";s:4:"left";s:7:"lexicon";N;s:4:"area";s:0:"";}s:31:"theme_advanced_toolbar_location";a:7:{s:4:"name";s:31:"theme_advanced_toolbar_location";s:4:"desc";s:191:"
This option enables you to specify where the toolbar should be located. This option can be set to "top" or "bottom" (the defualt). This option can only be used when theme is set to advanced.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"top";s:4:"text";s:3:"Top";}i:1;a:2:{s:5:"value";s:6:"bottom";s:4:"text";s:6:"Bottom";}}s:5:"value";s:3:"top";s:7:"lexicon";N;s:4:"area";s:0:"";}s:5:"width";a:7:{s:4:"name";s:5:"width";s:4:"desc";s:32:"The width of the TinyMCE editor.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"95%";s:7:"lexicon";N;s:4:"area";s:0:"";}s:33:"template_selected_content_classes";a:7:{s:4:"name";s:33:"template_selected_content_classes";s:4:"desc";s:234:"Specify a list of CSS class names for the template plugin. They must be separated by spaces. Any template element with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'tagElementPlugin',
      'description' => '',
      'editor_type' => '0',
      'category' => '5',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {
    case \'OnDocFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $panel = \'\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $panel = \'modx-panel-template\';
        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        $panel = \'modx-panel-chunk\';
        break;
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $panel = \'modx-panel-snippet\';
        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $panel = \'modx-panel-plugin\';
        break;
    default:
        return;
}
if (!empty($field)) {
    $modx->controller->addLexiconTopic(\'core:chunk\');
    $modx->controller->addLexiconTopic(\'core:snippet\');
    $modx->controller->addLexiconTopic(\'tagelementplugin:default\');
    $jsUrl = $modx->getOption(\'tagelementplugin_assets_url\', null, $modx->getOption(\'assets_url\') . \'components/tagelementplugin/\').\'js/mgr/\';
    /** @var modManagerController */
    $modx->controller->addLastJavascript($jsUrl.\'tagelementplugin.js\');
    $modx->controller->addLastJavascript($jsUrl.\'dialogs.js\');
    $usingFenon = $modx->getOption(\'pdotools_fenom_parser\',null,false) ? \'true\' : \'false\';
    $_html = "<script type=\\"text/javascript\\">\\n";
    $_html .= "\\tvar tagElPlugin = {};\\n";
    $_html .= "\\ttagElPlugin.config = {\\n";
    $_html .= "\\t\\tpanel : \'{$panel}\',\\n" ;
    $_html .= "\\t\\tfield : \'{$field}\',\\n" ;
    $_html .= "\\t\\tparent : [],\\n" ;
    $_html .= "\\t\\tkeys : {\\n\\t\\t\\tquickEditor :". $modx->getOption(\'tagelementplugin_quick_editor_keys\',null,\'\') . ",\\n" ;
    $_html .= "\\t\\t\\telementEditor :". $modx->getOption(\'tagelementplugin_element_editor_keys\',null,\'\') . ",\\n" ;
    $_html .= "\\t\\t\\tchunkEditor :". $modx->getOption(\'tagelementplugin_chunk_editor_keys\',null,\'\') . ",\\n" ;
    $_html .= "\\t\\t\\tquickChunkEditor :". $modx->getOption(\'tagelementplugin_quick_chunk_editor_keys\',null,\'\') . ",\\n" ;
    $_html .= "\\t\\t\\telementProperties :". $modx->getOption(\'tagelementplugin_element_prop_keys\',null,\'\') . "\\n\\t\\t},\\n" ;
    $_html .= "\\t\\tusing_fenom : {$usingFenon},\\n" ;
    $_html .= "\\t\\teditor : \'".$modx->getOption(\'which_element_editor\')."\',\\n" ;
    $_html .= "\\t\\tconnector_url : \'". $modx->getOption(\'tagelementplugin_assets_url\', null, $modx->getOption(\'assets_url\') . "components/tagelementplugin/")."connector.php\'\\n";
    $_html .= "\\t};\\n";
    $_html .= "</script>";
    $modx->controller->addHtml($_html);
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/tagelementplugin/elements/plugins/plugin.tagelementplugin.php',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'MIGX',
      'description' => '',
      'editor_type' => '0',
      'category' => '6',
      'cache_type' => '0',
      'plugincode' => '$corePath = $modx->getOption(\'migx.core_path\',null,$modx->getOption(\'core_path\').\'components/migx/\');
$assetsUrl = $modx->getOption(\'migx.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/migx/\');
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/inputoptions/\');
        break;

        case \'OnDocFormPrerender\':
        $modx->controller->addCss($assetsUrl.\'css/mgr.css\');
        break; 
 
    /*          
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    
    case \'OnDocFormPrerender\':
        $assetsUrl = $modx->getOption(\'colorpicker.assets_url\',null,$modx->getOption(\'assets_url\').\'components/colorpicker/\'); 
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            
        });
        </script>\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPicker.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorMenu.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPickerField.js\');		
        $modx->regClientCSS($assetsUrl.\'resources/css/colorpicker.css\');
        break;
     */
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    8 => 
    array (
      'id' => '8',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'shk_contextSwitch',
      'description' => 'Switch to catalog context.',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => '/*

 plugin contextSwitch
 
 System event: OnHandleRequest, OnPageNotFound, OnWebPageComplete

*/

//ini_set( \'display_errors\', 1 );
//error_reporting(E_ALL);

if($modx->context->get(\'key\') == \'mgr\') return \'\';

$prodPackageName = $modx->getOption(\'prodPackageName\',$scriptProperties,\'\');//shop
$prodClassName = $modx->getOption(\'prodClassName\',$scriptProperties,\'\');//ShopContent
$prodTemplateId = $modx->getOption(\'prodTemplateId\',$scriptProperties,1);
$debug = $modx->getOption(\'debug\',$scriptProperties,false);
$cacheOptions = array(
    xPDO::OPT_CACHE_KEY => $modx->getOption(\'cache_resource_key\', $scriptProperties, \'resource\'),
    xPDO::OPT_CACHE_HANDLER => $modx->getOption(\'cache_resource_handler\', $scriptProperties, \'xPDOFileCache\'),
    xPDO::OPT_CACHE_EXPIRES => (integer) $modx->getOption(\'cache_resource_expires\', $scriptProperties, 0),
    xPDO::OPT_CACHE_FORMAT => (integer) $modx->getOption(\'cache_resource_format\', $scriptProperties, xPDOCacheManager::CACHE_PHP),
    xPDO::OPT_CACHE_ATTEMPTS => (integer) $modx->cacheManager->getOption(\'cache_resource_attempts\', null, 1),
    xPDO::OPT_CACHE_ATTEMPT_DELAY => (integer) $modx->cacheManager->getOption(\'cache_resource_attempt_delay\', null, 1000)
);

switch($modx->event->name){
    
    case "OnHandleRequest":
        
        $cntxt_param = $modx->getOption(\'context_param_alias\', null, \'c\');
        $request_param_id = $modx->getOption(\'request_param_id\', null, \'id\');
        $friendly_urls = $modx->getOption(\'friendly_urls\', null, true);
        $container_suffix = $modx->getOption(\'container_suffix\', null, \'\');
        $catalog_id = $modx->getOption(\'catalog_id\',$scriptProperties,0);
        $context_key = $modx->getOption(\'context_key\',$scriptProperties,\'\');
        $site_start = $modx->getOption(\'site_start\', null, 1);
        $request_uri = substr($_SERVER[\'REQUEST_URI\'],0,1)==\'/\' ? substr($_SERVER[\'REQUEST_URI\'],1) : $_SERVER[\'REQUEST_URI\'];
        if( strpos( $request_uri, \'/\' ) !== false ){
            $lang_key = substr( $request_uri, 0, strpos( $request_uri, \'/\' ) );
        }else{
            $lang_key = $request_uri;
        }
        
        if( !$context_key ) return \'\';
        
        if( $modx->config[\'friendly_urls\'] ){
            
            if( $request_uri ){
                
                $contentType = $modx->getObject(\'modContentType\',array(\'name\'=>\'HTML\'));
                $html_ext = $contentType->getExtension();
                
                $base_dir_alias = current( explode( \'/\', $request_uri ) );
                if( strlen( $container_suffix ) > 1 && strpos( $base_dir_alias, $container_suffix ) === false ){
                    $base_dir_alias .= $container_suffix;
                }
                if( !$container_suffix && $html_ext ){
                    $base_dir_alias .= $html_ext;
                }
                
                $context_child_ids = $modx->getChildIds( 0, 1, array( \'context\' => $context_key ) );
                
                //Проверяем нужно ли переключать контекст
                $switch_action = false;
                foreach( $context_child_ids as $id ){
                    $temp_url = basename( $modx->makeURL( $id,$context_key, \'\', \'abs\' ) );
                    if( $temp_url == $base_dir_alias ){
                        $switch_action = true;
                        break;
                    }
                }
                
                if( $switch_action ){
                    $modx->reloadContext( $context_key );
                    $modx->switchContext( $context_key );
                    $modx->config[\'site_start\'] = $site_start;
                    $modx->setPlaceholder( \'context_key\', $context_key );
                }
                
            }
            
        }else{
            
            $requestId = !empty($_REQUEST[$request_param_id]) && is_numeric($_REQUEST[$request_param_id]) ? $_REQUEST[$request_param_id] : 0;
            if(!$requestId) return \'\';
            $resource = $modx->getObject( \'modResource\', $requestId );
            if( $resource && $resource->get(\'context_key\') == $context_key ){
                $modx->reloadContext( $context_key );
                $modx->switchContext( $context_key );
                $modx->config[\'site_start\'] = $site_start;
                $modx->setPlaceholder( \'context_key\', $context_key );
            }
            
        }
    
    break;
    case "OnPageNotFound":
        
        if(!$prodClassName || $prodClassName==\'modResource\') break;
        
        $container_suffix = $modx->getOption(\'container_suffix\', null, \'\');
        $request_param_alias = $modx->getOption(\'request_param_alias\',null,\'q\');
        $request_param_id = $modx->getOption(\'request_param_id\',null,\'id\');
        $url = isset($_GET[$request_param_alias]) ? $_GET[$request_param_alias] : \'\';
        
        $contentType = $modx->getObject(\'modContentType\',array(\'name\'=>\'HTML\'));
        $html_ext = $contentType->getExtension();

        $short_url = $html_ext
            ? substr( $url, 0, ( 0 - strlen( $html_ext ) ) )
            : $url;
        
        $parent_url = strpos( $short_url, \'/\' ) !== false
            ? substr( $short_url, 0, strrpos( $short_url, \'/\' ) ) . $container_suffix
            : \'\';

        $prod_alias = strpos( $short_url, \'/\' ) !== false
            ? substr( $short_url, (strrpos( $short_url, \'/\' )+1) )
            : $short_url;

        $resourceIdentifier = $modx->findResource($parent_url);
        if(!$resourceIdentifier) return \'\';
        
        $resource = $modx->getObject( \'modResource\', array( \'id\' => $resourceIdentifier, \'published\' => true, \'deleted\' => false ) );
        if( !$resource ) return \'\';
        
        //Определяем параметры шаблона
        $templateObj = $resource->getOne(\'Template\');
        $templateProps = !empty($templateObj) ? $templateObj->getProperties() : array();
        if(!empty($templateProps[\'prodPackageName\'])) $prodPackageName = $templateProps[\'prodPackageName\'];
        if(!empty($templateProps[\'prodClassName\'])) $prodClassName = $templateProps[\'prodClassName\'];
        if(!empty($templateProps[\'prodTemplateId\'])) $prodTemplateId = $templateProps[\'prodTemplateId\'];
        
        $modelpath = $modx->getOption(\'core_path\') . \'components/\' . $prodPackageName . \'/model/\';
        $modx->addPackage($prodPackageName, $modelpath);
        
        $product = $modx->getObject( $prodClassName, array( \'resource_id\'=>$resourceIdentifier,\'alias\'=>$prod_alias,\'published\'=>true,\'deleted\'=>false ) );
        
        if($product){
            
            if(!$product->get(\'template\')) $product->set(\'template\',$prodTemplateId);
            $product->set(\'parent\',$resourceIdentifier);
            
            $cacheKey = \'shk_\'.$prodPackageName.\'/\'.$product->get(\'id\');
            
            $cachedResource = $modx->cacheManager->get( $cacheKey, $cacheOptions );
            
            //Вытаскиваем из кэша
            if ( is_array($cachedResource) && array_key_exists(\'resource\', $cachedResource) && is_array($cachedResource[\'resource\']) ) {
                
                $modx->resource = $modx->newObject($cachedResource[\'resourceClass\']);
                
                if ($modx->resource) {
                    
                    $modx->resource->fromArray($cachedResource[\'resource\'], \'\', true, true, true);
                    $modx->resource->_content = $cachedResource[\'resource\'][\'_content\'];
                    $modx->resource->_isForward = isset($cachedResource[\'resource\'][\'_isForward\']) && !empty($cachedResource[\'resource\'][\'_isForward\']);
                    
                    if (isset($cachedResource[\'elementCache\'])) $modx->elementCache = $cachedResource[\'elementCache\'];
                    if (isset($cachedResource[\'sourceCache\'])) $modx->sourceCache = $cachedResource[\'sourceCache\'];
                    if ($modx->resource->get(\'_jscripts\')) $modx->jscripts = $modx->jscripts + $modx->resource->get(\'_jscripts\');
                    if ($modx->resource->get(\'_sjscripts\')) $modx->sjscripts = $modx->sjscripts + $modx->resource->get(\'_sjscripts\');
                    if ($modx->resource->get(\'_loadedjscripts\')) $modx->loadedjscripts = array_merge($modx->loadedjscripts, $modx->resource->get(\'_loadedjscripts\'));
                    $isForward = $modx->resource->_isForward;
                    $modx->resource->setProcessed(true);
                    $fromCache = true;
                    
                    $modx->invokeEvent(\'OnLoadWebPageCache\');
                    
                }
            
            //Если в кэше нет, создаём новый виртуальный ресурс товара
            }else{
                
                $modx->resource = $modx->newObject(\'modResource\');
                //$modx->resource->set();
                
                ####################################################
                //Просчитываем поля по типам ввода связанных TV
                $product_fields = $product->toArray();
                $field_tv = array();
                
                $sql = "
                SELECT `formtabs`
                FROM `".$modx->config[\'table_prefix\']."migx_configs`
                WHERE `name` = \'{$prodPackageName}\'
                ";
                $stmt = $modx->prepare($sql);
                if ($stmt && $stmt->execute()) {
                    $migx_config_formtabs = $stmt->fetchColumn();
                    if($migx_config_formtabs){
                        $migx_config_formtabs_arr = json_decode($migx_config_formtabs,true);
                        foreach($migx_config_formtabs_arr as $formtabs){
                            
                            if(!empty($formtabs[\'fields\'])){
                                $temp_fields = !is_array($formtabs[\'fields\'])? json_decode($formtabs[\'fields\'],true) : $formtabs[\'fields\'];
                            }else{
                                $temp_fields = array();
                            }
                            
                            foreach($temp_fields as $temp_field){
                                if(!empty($temp_field[\'inputTV\'])) $field_tv[$temp_field[\'field\']] = $temp_field[\'inputTV\'];
                            }
                        }
                        
                    }
                }
                $stmt->closeCursor();
                
                foreach($field_tv as $field_name => $tv_name){
                    if(isset($product_fields[$field_name])){
                        
                        $tv_object = $modx->getObject(\'modTemplateVar\',array(\'name\'=>$tv_name));
                        if( is_object($tv_object) ){
                            if($tv_object->get(\'display\')==\'default\') continue;
                            
                            $tv_object->set(\'name\',$field_name);
                            $output_properties = array_merge($tv_object->get(\'output_properties\'),array(\'param_name\'=>$field_name,\'id\'=>$product_fields[\'id\']));
                            $tv_object->set(\'output_properties\',$output_properties);
                            $tv_object->set(\'value\',$product_fields[$field_name]);
                            
                            $value = $product_fields[$field_name];
                            $value = $tv_object->prepareOutput($value);
                            $outputRenderPaths = $tv_object->getRenderDirectories(\'OnTVOutputRenderList\',\'output\');
                            
                            $value = $tv_object->getRender($output_properties,$value,$outputRenderPaths,\'output\',$product_fields[\'id\'],$tv_object->get(\'display\'));
                            
                            $product_fields[$field_name] = $value;
                        }
                    }
                }
                ####################################################
                
                $modx->resource->fromArray(array_merge($resource->toArray(),$product_fields));
                $modx->resource->_fieldMeta = array_merge($resource->_fieldMeta,$product->_fieldMeta);
                
                $modx->resource->set(\'id\',$product->get(\'id\'));
                $modx->resource->set(\'cacheable\',false);
                $modx->resource->set(\'class_key\',$prodClassName);
                $modx->resource->_content = \'\';
                $modx->resource->_output = \'\';
                $modx->resource->_isForward = true;
                //$modx->resource->_class = $prodClassName;
                
                $modx->elementCache = array();
                $modx->resourceGenerated = true;
                unset($resource);
                
            }
            
            unset($product);
            
            if($debug){ echo \'<pre>\'.print_r($modx->resource->toArray(),true).\'</pre>\'; exit; }
            
            //Просчитываем и выводим HTML-код страницы товара
            $modx->resourceIdentifier = $modx->resource->get(\'id\');
            $modx->resourceMethod = \'id\';
            
            $modx->request->prepareResponse();
            
        }
        
    break;

    case "OnWebPageComplete":
        
        if(!$prodClassName || $prodClassName == \'modResource\') break;
        
        $results= array();
        if ( is_object($modx->resource) && $modx->resource instanceof modResource && $modx->resource->getProcessed() && $modx->resource->get(\'id\') ) {
            
            if( $modx->resource->class_key != $prodClassName ) break;
            
            $cacheKey = \'shk_\'.$prodPackageName.\'/\'.$modx->resource->get(\'id\');
            
            //$cacheProvider = $modx->cacheManager->getCacheProvider($modx->cacheManager->getOption(xPDO::OPT_CACHE_KEY, $cacheOptions));
            //$cachePath = $cacheProvider->getCacheKey( $cacheKey, $cacheOptions );
            
            $cachedResource = $modx->cacheManager->get( $cacheKey, $cacheOptions );
            
            if ( !is_array( $cachedResource ) || empty( $cachedResource ) ) {
                
                $results[\'resourceClass\'] = $modx->resource->_class;
                $results[\'resource\'][\'_processed\']= $modx->resource->getProcessed();
                $results[\'resource\']= $modx->resource->toArray(\'\', true);
                $results[\'resource\'][\'_content\']= $modx->resource->_content;
                $results[\'resource\'][\'_isForward\']= $modx->resource->_isForward;
                if ($contentType = $modx->resource->getOne(\'ContentType\')) {
                    $results[\'contentType\']= $contentType->toArray(\'\', true);
                }
                $results[\'resourceGroups\']= array();
                $context = $modx->resource->_contextKey ? $modx->resource->_contextKey : \'web\';
                $policies = $modx->resource->findPolicy($context);
                if (is_array($policies)) {
                    $results[\'policyCache\']= $policies;
                }
                if (!empty($modx->elementCache)) {
                    $results[\'elementCache\']= $modx->elementCache;
                }
                if (!empty($modx->sourceCache)) {
                    $results[\'sourceCache\']= $modx->sourceCache;
                }
                if (!empty($modx->resource->_sjscripts)) {
                    $results[\'resource\'][\'_sjscripts\']= $modx->resource->_sjscripts;
                }
                if (!empty($modx->resource->_jscripts)) {
                    $results[\'resource\'][\'_jscripts\']= $modx->resource->_jscripts;
                }
                if (!empty($modx->resource->_loadedjscripts)) {
                    $results[\'resource\'][\'_loadedjscripts\']= $modx->resource->_loadedjscripts;
                }
                
                $lifetime = (integer) $modx->cacheManager->getOption(\'cache_resource_expires\', $cacheOptions, $modx->cacheManager->getOption(xPDO::OPT_CACHE_EXPIRES, $cacheOptions, 0));
                
                if (!$modx->cacheManager->set( $cacheKey, $results, $lifetime, $cacheOptions ) ) {
                    $modx->log( modX::LOG_LEVEL_ERROR, "[contextSwitch] Could not cache resource " . $modx->resource->get(\'id\') );
                }
                
            }
            
            unset($cachedResource);
            
        }
        
    break;

}

return \'\';',
      'locked' => '0',
      'properties' => 'a:8:{s:19:"context_param_alias";a:7:{s:4:"name";s:19:"context_param_alias";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"c";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"request_param_id";a:7:{s:4:"name";s:16:"request_param_id";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:2:"id";s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"catalog_id";a:7:{s:4:"name";s:10:"catalog_id";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"context_key";a:7:{s:4:"name";s:11:"context_key";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"catalog";s:7:"lexicon";N;s:4:"area";s:0:"";}s:10:"site_start";a:7:{s:4:"name";s:10:"site_start";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"1";s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"prodPackageName";a:7:{s:4:"name";s:15:"prodPackageName";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:13:"prodClassName";a:7:{s:4:"name";s:13:"prodClassName";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"prodTemplateId";a:7:{s:4:"name";s:14:"prodTemplateId";s:4:"desc";s:0:"";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"1";s:7:"lexicon";N;s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    10 => 
    array (
      'id' => '10',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'shk_tv_input_output',
      'description' => 'Print Shopkeeper`s input and output types for TV.',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => '$corePath = MODX_CORE_PATH.\'components/shopkeeper3/\';

switch ($modx->event->name) {
    //tv input
    case \'OnTVInputRenderList\':
        if($modx->context->get(\'key\') != \'mgr\') return;
        $modx->regClientStartupScript($modx->getOption(\'assets_url\').\'components/shopkeeper3/mgr/js/shk_mgr.js\');
        $modx->regClientStartupScript($modx->getOption(\'assets_url\').\'components/shopkeeper3/mgr/js/widgets/shk.grid.js\');
        $modx->regClientCSS($modx->getOption(\'assets_url\').\'components/shopkeeper3/mgr/css/mgr.css\');
        $modx->event->output($corePath.\'elements/tv/input/\');
    break;
    case \'OnTVInputPropertiesList\':
        if($modx->context->get(\'key\') != \'mgr\') return;
        $modx->event->output($corePath.\'elements/tv/inputproperties/\');
    break;
    //tv output
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
    break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/outputproperties/\');
    break;
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    12 => 
    array (
      'id' => '12',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Collections',
      'description' => '',
      'editor_type' => '0',
      'category' => '11',
      'cache_type' => '0',
      'plugincode' => '/**
 * Collections
 *
 * DESCRIPTION
 *
 * This plugin inject JS to handle proper working of close buttons in Resource\'s panel (OnDocFormPrerender)
 * This plugin handles setting proper show_in_tree parameter (OnBeforeDocFormSave, OnResourceSort)
 *
 * @var modX $modx
 * @var array $scriptProperties
 */
$corePath = $modx->getOption(\'collections.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/collections/\');
/** @var Collections $collections */
$collections = $modx->getService(
    \'collections\',
    \'Collections\',
    $corePath . \'model/collections/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'Collections\' . $modx->event->name;

$modx->loadClass(\'CollectionsPlugin\', $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);
$modx->loadClass($className, $collections->getOption(\'modelPath\') . \'collections/events/\', true, true);

if (class_exists($className)) {
    /** @var CollectionsPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}

return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    16 => 
    array (
      'id' => '16',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'phpThumbOfCacheManager',
      'description' => 'Handles cache cleaning when clearing the Site Cache.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * phpThumbOf
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * phpThumbOf is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * phpThumbOf is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package phpthumbof
 */
/**
 * Handles cache management for phpthumbof filter
 *
 * @var \\modX $modx
 * @var array $scriptProperties
 *
 * @package phpthumbof
 */
if (empty($results)) $results = array();

switch ($modx->event->name) {
    case \'OnSiteRefresh\':
        if (!$modx->loadClass(\'modPhpThumb\',$modx->getOption(\'core_path\').\'model/phpthumb/\',true,true)) {
            $modx->log(modX::LOG_LEVEL_ERROR,\'[phpThumbOf] Could not load modPhpThumb class in plugin.\');
            return;
        }
        $assetsPath = $modx->getOption(\'phpthumbof.assets_path\',$scriptProperties,$modx->getOption(\'assets_path\').\'components/phpthumbof/\');
        $phpThumb = new modPhpThumb($modx);
        $cacheDir = $assetsPath.\'cache/\';

        /* clear local cache */
        if (!empty($cacheDir)) {
            /** @var DirectoryIterator $file */
            foreach (new DirectoryIterator($cacheDir) as $file) {
                if (!$file->isFile()) continue;
                @unlink($file->getPathname());
            }
        }

        /* if using amazon s3, clear our cache there */
        $useS3 = $modx->getOption(\'phpthumbof.use_s3\',$scriptProperties,false);
        if ($useS3) {
            $modelPath = $modx->getOption(\'phpthumbof.core_path\',null,$modx->getOption(\'core_path\').\'components/phpthumbof/\').\'model/\';
            /** @var modAws $modaws */
            $modaws = $modx->getService(\'modaws\',\'modAws\',$modelPath.\'aws/\',$scriptProperties);
            $s3path = $modx->getOption(\'phpthumbof.s3_path\',null,\'phpthumbof/\');
            
            $list = $modaws->getObjectList($s3path);
            if (!empty($list) && is_array($list)) {
                foreach ($list as $obj) {
                    if (empty($obj->Key)) continue;

                    $results[] = $modaws->deleteObject($obj->Key);
                }
            }
        }

        break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    24 => 
    array (
      'id' => '24',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'StercSEO',
      'description' => 'Plugin to render the seo tab and save all the data',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * StercSEO
 *
 * Copyright 2013 by Sterc internet & marketing <modx@sterc.nl>
 *
 * This file is part of StercSEO.
 *
 * StercSEO is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * StercSEO is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * StercSEO; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package stercseo
 */
/**
 * StercSEO Plugin
 *
 *
 * Events:
 * OnDocFormPrerender,OnDocFormSave,OnHandleRequest,OnPageNotFound
 *
 * @author Sterc internet & marketing <modx@sterc.nl>
 *
 * @package stercseo
 *
 */
$stercseo = $modx->getService(\'stercseo\',\'StercSEO\',$modx->getOption(\'stercseo.core_path\',null,$modx->getOption(\'core_path\').\'components/stercseo/\').\'model/stercseo/\',array());

if (!($stercseo instanceof StercSEO)) return;

switch ($modx->event->name) {
	case \'OnDocFormPrerender\':
		$resource =& $modx->event->params[\'resource\'];
		if($resource){
			//First check if SEOTab is allowed in this context
			if(!$stercseo->isAllowed($resource->get(\'context_key\'))) return;
			$properties = $resource->getProperties(\'stercseo\');
		}
		if(empty($properties)){
			$properties = array(
				\'index\' => $modx->getOption(\'stercseo.index\', null, \'1\'),
				\'follow\' => $modx->getOption(\'stercseo.follow\', null, \'1\'),
				\'sitemap\' => $modx->getOption(\'stercseo.sitemap\', null, \'1\'),
				\'priority\' => $modx->getOption(\'stercseo.priority\', null, \'0.5\'),
				\'changefreq\' => $modx->getOption(\'stercseo.changefreq\', null, \'weekly\'),
				//\'urls\' => $modx->fromJSON($_POST[\'urls\'])
			);
		}
		//$output .= \'<div id="stercseo-box">\'.$errorMessage.$outputLanguageItems.\'</div>\';
		//$modx->event->output($output);
		$modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            StercSEO.config = \'.$modx->toJSON($stercseo->config).\';
            StercSEO.config.connector_url = "\'.$stercseo->config[\'connectorUrl\'].\'";
            StercSEO.record = \'.$modx->toJSON($properties).\';
        });
        </script>\');
	    $version = $modx->getVersionData();

		/* include CSS and JS*/
		if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
	    	$modx->regClientCSS($stercseo->config[\'cssUrl\'].\'stercseo.css\');
	    }
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/stercseo.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/sections/resource.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/widgets/resource.grid.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/widgets/resource.vtabs.js\');

		//add lexicon
		$modx->controller->addLexiconTopic(\'stercseo:default\');

		break;

	case \'OnBeforeDocFormSave\':
	        $oldResource = ($mode == \'upd\') ? $modx->getObject(\'modResource\',$resource->get(\'id\')) : $resource;
			if(!$stercseo->isAllowed($oldResource->get(\'context_key\'))) return;
			$properties = $oldResource->getProperties(\'stercseo\');
			if($_POST[\'urls\'] != \'false\' && isset($_POST[\'urls\'])){
				if($mode == \'upd\'){
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $properties[\'index\']),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $properties[\'follow\']),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $properties[\'sitemap\']),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $properties[\'priority\']),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $properties[\'changefreq\']),
						\'urls\' => $modx->fromJSON($_POST[\'urls\'])
					);
				}else{
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $modx->getOption(\'stercseo.index\', null, \'1\')),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $modx->getOption(\'stercseo.follow\', null, \'1\')),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $modx->getOption(\'stercseo.sitemap\', null, \'1\')),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $modx->getOption(\'stercseo.priority\', null, \'0.5\')),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $modx->getOption(\'stercseo.changefreq\', null, \'weekly\')),
						\'urls\' => $modx->fromJSON($_POST[\'urls\'])
					);
				}
			}else{
			   	if($mode == \'upd\'){
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $properties[\'index\']),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $properties[\'follow\']),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $properties[\'sitemap\']),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $properties[\'priority\']),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $properties[\'changefreq\']),
						\'urls\' => $properties[\'urls\']
					);
				}else{
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $modx->getOption(\'stercseo.index\', null, \'1\')),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $modx->getOption(\'stercseo.follow\', null, \'1\')),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $modx->getOption(\'stercseo.sitemap\', null, \'1\')),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $modx->getOption(\'stercseo.priority\', null, \'0.5\')),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $modx->getOption(\'stercseo.changefreq\', null, \'weekly\')),
						\'urls\' => $properties[\'urls\']
					);
				}
			}
			
			if($oldResource->get(\'alias\') != $resource->get(\'alias\') && $oldResource->get(\'alias\') != \'\'){
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
			}
			if($oldResource->get(\'uri\') != $resource->get(\'uri\') && $oldResource->get(\'uri\') != \'\'){
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
			}

        	$resource->setProperties($newProperties,\'stercseo\');
		break;
	case \'OnLoadWebDocument\':
		if($modx->resource){
			if(!$stercseo->isAllowed($modx->resource->get(\'context_key\'))) return;
			$properties = $modx->resource->getProperties(\'stercseo\');
			$metaContent = array(\'noopd\', \'noydir\');
			if(!$properties[\'index\']) $metaContent[] = \'noindex\';
			if(!$properties[\'follow\']) $metaContent[] = \'nofollow\';
			$modx->setPlaceholder(\'seoTab.robotsTag\',implode(\',\', $metaContent));
		}
		break;

	case \'OnPageNotFound\':
		$url = urldecode($_SERVER[\'REQUEST_URI\']);
        
		$convertedUrl = str_replace(\'/\', \'_/\', ltrim($url, \'/\'));
        $convertedUrl = json_encode($convertedUrl);
        $convertedUrl = str_replace("\\u", "\\\\\\\\u", $convertedUrl);
        $convertedUrl = str_replace(\'"\', \'\', $convertedUrl);
        
		$w = array(
			\'properties:LIKE\' => \'%\'.$convertedUrl.\'%\'
		);
		
		if($modx->getOption(\'stercseo.context-aware-alias\', null, \'0\')){
			$w[\'context_key\'] = $modx->context->key;
		}

		$alreadyExists = $modx->getObject(\'modResource\', $w);
		if($alreadyExists){
			$id = $modx->makeUrl($alreadyExists->get(\'id\'));
			$modx->sendRedirect($id, 0, \'REDIRECT_HEADER\', \'HTTP/1.1 301 Moved Permanently\');
		}
		break;
	case \'OnResourceBeforeSort\':
		foreach($nodes as $node) {
			$oldResource = $modx->getObject(\'modResource\',$node[\'id\']);
			$resource 	 = $modx->getObject(\'modResource\',$node[\'id\']);
			$resource->set(\'parent\', $node[\'parent\']);

			if(!$stercseo->isAllowed($resource->get(\'context_key\'))) return;

			if($oldResource->get(\'uri\') != $resource->getAliasPath($resource->get(\'alias\')) && $oldResource->get(\'uri\') != \'\'){
				$newProperties = $oldResource->getProperties(\'stercseo\');
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
				$oldResource->setProperties($newProperties,\'stercseo\');
				$oldResource->save();
			}
		}
		break;
	case \'OnResourceDuplicate\':
		if(!$stercseo->isAllowed($newResource->get(\'context_key\'))) return;
		$props = $newResource->getProperties(\'stercseo\');
		$props[\'urls\'] = array();
		$newResource->setProperties($props,\'stercseo\');
		$newResource->save();
		break;

}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    25 => 
    array (
      'id' => '25',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'SimpleSearchIndexer',
      'description' => 'Automatically indexes Resources into Solr.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Plugin to index Resources whenever they are changed, published, unpublished,
 * deleted, or undeleted.
 *
 * @var modX $modx
 * @var SimpleSearch $search
 *
 * @package simplesearch
 */

require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

$search->loadDriver($scriptProperties);
if (!$search->driver || (!($search->driver instanceof SimpleSearchDriverSolr) && !($search->driver instanceof SimpleSearchDriverElastic))) return;

/**
 * helper method for missing params in events
 * @param modX $modx
 * @param array $children
 * @param int $parent
 * @return boolean
 */
if (!function_exists(\'SimpleSearchGetChildren\')) {
    function SimpleSearchGetChildren(&$modx,&$children,$parent) {
        $success = false;
        $kids = $modx->getCollection(\'modResource\',array(
            \'parent\' => $parent,
        ));
        if (!empty($kids)) {
            /** @var modResource $kid */
            foreach ($kids as $kid) {
                $children[] = $kid->toArray();
                SimpleSearchGetChildren($modx,$children,$kid->get(\'id\'));
            }
        }
        return $success;
    }
}

$action = \'index\';
$resourcesToIndex = array();
switch ($modx->event->name) {
    case \'OnDocFormSave\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();

        if ($resourceArray[\'published\'] == 1 && $resourceArray[\'deleted\'] == 0) {
            $action = \'index\';
            foreach ($_POST as $k => $v) {
                if (substr($k,0,2) == \'tv\') {
                    $id = str_replace(\'tv\',\'\',$k);
                    /** @var modTemplateVar $tv */
                    $tv = $modx->getObject(\'modTemplateVar\',$id);
                    if ($tv) {
                        $resourceArray[$tv->get(\'name\')] = $tv->renderOutput($resource->get(\'id\'));
                        $modx->log(modX::LOG_LEVEL_DEBUG,\'Indexing \'.$tv->get(\'name\').\': \'.$resourceArray[$tv->get(\'name\')]);
                    }
                    unset($resourceArray[$k]);
                }
            }
        } else {
            $action = \'removeIndex\';
        }

        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocPublished\':
        $action = \'index\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnDocUnpublished\':
    case \'OnDocUnPublished\':
        $action = \'removeIndex\';
        $resourceArray = $scriptProperties[\'resource\']->toArray();
        unset($resourceArray[\'ta\'],$resourceArray[\'action\'],$resourceArray[\'tiny_toggle\'],$resourceArray[\'HTTP_MODAUTH\'],$resourceArray[\'modx-ab-stay\'],$resourceArray[\'resource_groups\']);
        $resourcesToIndex[] = $resourceArray;
        break;
    case \'OnResourceDuplicate\':
        $action = \'index\';
        /** @var modResource $newResource */
        $resourcesToIndex[] = $newResource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$newResource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceDelete\':
        $action = \'removeIndex\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
    case \'OnResourceUndelete\':
        $action = \'index\';
        $resourcesToIndex[] = $resource->toArray();
        $children = array();
        SimpleSearchGetChildren($modx,$children,$resource->get(\'id\'));
        foreach ($children as $child) {
            $resourcesToIndex[] = $child;
        }
        break;
}

foreach ($resourcesToIndex as $resourceArray) {
    if (!empty($resourceArray[\'id\'])) {
        if ($action == \'index\') {
            $search->driver->index($resourceArray);
        } else if ($action == \'removeIndex\') {
            $search->driver->removeIndex($resourceArray[\'id\']);
        }
    }
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_unpack' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 7,
          'authority' => 9999,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => false,
            'actions' => false,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => false,
            'content_types' => false,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => false,
            'delete_chunk' => false,
            'delete_context' => false,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => false,
            'delete_propertyset' => false,
            'delete_role' => false,
            'delete_snippet' => false,
            'delete_template' => false,
            'delete_tv' => false,
            'delete_user' => false,
            'directory_chmod' => false,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => false,
            'edit_chunk' => false,
            'edit_context' => false,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => false,
            'edit_propertyset' => false,
            'edit_role' => false,
            'edit_snippet' => false,
            'edit_template' => false,
            'edit_tv' => false,
            'edit_user' => false,
            'element_tree' => false,
            'empty_cache' => true,
            'error_log_erase' => false,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => false,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => false,
            'menu_reports' => true,
            'menu_security' => false,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => false,
            'new_chunk' => false,
            'new_context' => false,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => false,
            'new_propertyset' => false,
            'new_role' => false,
            'new_snippet' => false,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => false,
            'new_tv' => false,
            'new_user' => false,
            'new_weblink' => true,
            'packages' => false,
            'policy_delete' => false,
            'policy_edit' => false,
            'policy_new' => false,
            'policy_save' => false,
            'policy_template_delete' => false,
            'policy_template_edit' => false,
            'policy_template_new' => false,
            'policy_template_save' => false,
            'policy_template_view' => false,
            'policy_view' => false,
            'property_sets' => false,
            'providers' => false,
            'publish_document' => true,
            'purge_deleted' => false,
            'remove' => true,
            'remove_locks' => true,
            'resourcegroup_delete' => false,
            'resourcegroup_edit' => false,
            'resourcegroup_new' => false,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_duplicate' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => false,
            'save_chunk' => false,
            'save_context' => false,
            'save_document' => true,
            'save_plugin' => false,
            'save_propertyset' => false,
            'save_role' => false,
            'save_snippet' => false,
            'save_template' => false,
            'save_tv' => false,
            'save_user' => false,
            'search' => true,
            'settings' => false,
            'sources' => false,
            'source_delete' => false,
            'source_edit' => false,
            'source_save' => false,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => false,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => false,
            'usergroup_edit' => false,
            'usergroup_new' => false,
            'usergroup_save' => false,
            'usergroup_user_edit' => false,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => false,
            'view_chunk' => false,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => false,
            'view_propertyset' => false,
            'view_role' => false,
            'view_snippet' => false,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => false,
          ),
        ),
      ),
    ),
  ),
);