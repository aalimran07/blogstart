<?php
add_filter('comment_form_default_fields', 'construc_comment_form');
function construc_comment_form($construc_fields)
{
    $construc_fields['author'] = '<div class="col-md-6">
                  <div class="form-group d-flex justify-content-between mb-20">
                    <input type="text" name="author" id="name-cmt" placeholder="Name">
                  </div>
                </div>';
    $construc_fields['email'] =  ' <div class="col-md-6">
                  <div class="form-group d-flex justify-content-between mb-20">
                    <input type="email" name="email" id="email-cmt" placeholder="Email">
                  </div>
                </div>';
    $construc_fields['url'] = ' ';
    $construc_fields['cookies'] = ' ';
    return $construc_fields;
}
add_filter('comment_form_defaults', 'construc_comment_default_forms');
function construc_comment_default_forms($default_form)
{
    $default_form['comment_field'] = '<div class="row"><div class="col-sm-12">
                  <div class="form-group d-flex justify-content-between mb-20 comment-message">
                    <textarea name="comment" rows="7" placeholder="Comments"></textarea>
                  </div>
                </div>';
    $default_form['submit_button'] = '</div><div class="submit-button"> <button type="submit" class="submit">'.esc_html__('Post Comment', 'blogstart').'</button></div></div>';
    $default_form['comment_notes_before'] = '';
    $default_form['title_reply'] = esc_html__('leave a Comment', 'blogstart');
    $default_form['title_reply_before'] = '<div class="comments-from"><h2 class="widget-title">';
    $default_form['title_reply_after'] = '</h2>';
    return $default_form;
}