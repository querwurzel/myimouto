<?php # Facebook Open Graph
      # Reference: https://developers.facebook.com/docs/opengraphprotocol/ ?>
<?= $this->tag('meta', array('property' => 'og:title', 'content' => $this->html_title())) ?>
<?= $this->tag('meta', array('property' => 'og:type', 'content' => 'article')) ?>
<?= $this->tag('meta', array('property' => 'og:url', 'content' => $this->urlFor(array('post#show', 'id' => $this->post->id, 'only_path' => false)))) ?>
<?= $this->tag('meta', array('property' => 'og:site_name', 'content' => CONFIG()->app_name)) ?>
<?= $this->tag('meta', array('property' => 'og:description', 'content' => $this->post->tags())) ?>
<?php # Reddit Thumbnail ?>
<?php
if (CONFIG()->can_see_post(current_user(), $this->post)) {
    echo $this->tag('link', array('rel' => 'image_src', 'href' => $this->post->sample_url()));
    echo $this->tag('meta', array('property' => 'og:image', 'content' => $this->post->sample_url()));
}
?>
