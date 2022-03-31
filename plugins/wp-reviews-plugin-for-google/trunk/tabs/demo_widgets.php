<div class="ti-preview-boxes-container">
<?php foreach(TrustindexPlugin_google::$widget_templates['templates'] as $id => $template): ?>
<?php
$class_name = 'ti-full-width';
if(in_array($template['type'], [ 'badge', 'button', 'floating', 'popup', 'sidebar' ]))
{
$class_name = 'ti-half-width';
}
if(!in_array($id, [ 17, 21 ]))
{
$random_set_id = array_rand(TrustindexPlugin_google::$widget_styles);
}
else
{
$random_set_id = 'light-background';
}
?>
<div class="<?php echo esc_attr($class_name); ?>">
<div class="ti-box ti-preview-boxes" data-layout-id="<?php echo esc_attr($id); ?>" data-set-id="<?php echo esc_attr($random_set_id); ?>">
<div class="ti-header">
<span class="ti-header-layout-text">
<?php echo TrustindexPlugin_google::___('More widget examples'); ?> -
<strong><?php echo esc_html(TrustindexPlugin_google::___($template['name'])); ?></strong>
<?php if(!in_array($id, [ 17, 21 ])): ?> (<?php echo esc_html(TrustindexPlugin_google::___(TrustindexPlugin_google::$widget_styles[$random_set_id]['name'])); ?>)<?php endif; ?>
</span>
</div>
<div class="preview">
<?php echo $trustindex_pm_google->get_noreg_list_reviews(null, true, $id, $random_set_id, true, true); ?>
</div>
</div>
</div>
<?php endforeach; ?>
</div>