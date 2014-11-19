<?php

/**
 * Takes a template and set the variables it needs.
 * @param Template $from_template Template object with the path to fetch from.
 * @return mixed   $options       List of variables.
 * view :: Template -> [] -> Template
 */
function set_template_options($template, $options = [])
{
    foreach($options as $var => $content) {
        $template->set($var, $content);
    }

    return $template;
}

/**
 * Creates the page header.
 * @param Template $template The template with the right folder.
 * @param array $options     The hash with the components to be injected.
 * @return Template
 * header_page :: Template -> Map String a -> Template
 */
function view($page, $options = [])
{
    $template = new Template(templates_path());
    $template = set_template_options($template, $options);
    return $template->fetch($page);
}
