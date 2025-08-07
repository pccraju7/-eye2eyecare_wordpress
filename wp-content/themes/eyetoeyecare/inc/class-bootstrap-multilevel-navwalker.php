<?php
/**
 * Supports Bootstrap 5 multi-level dropdowns
 */
class Bootstrap_Multilevel_Navwalker extends Walker_Nav_Menu {
  // Starts submenu level
  public function start_lvl(&$output, $depth = 0, $args = []) {
    $indent = str_repeat("\t", $depth);
    $submenu_class = $depth > 0 ? ' dropdown-menu sub-menu' : ' dropdown-menu';
    $output .= "\n$indent<ul class=\"$submenu_class depth_$depth\">\n";
  }

  // Starts individual item
  public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $has_children = in_array('menu-item-has-children', $item->classes);
    $li_class = $has_children ? 'dropdown-submenu' : '';
    $li_class .= $depth === 0 && $has_children ? ' dropdown' : '';
    $li_class .= ' nav-item';

    $output .= "$indent<li id='menu-item-{$item->ID}' class='$li_class'>";

    $link_class = $depth > 0 ? 'dropdown-item' : 'nav-link';
    if ($has_children) {
      $link_class .= ' dropdown-toggle';
    }
    $attrs = [
      'href' => $has_children ? '#' : esc_url($item->url),
      'class' => $link_class,
      'data-bs-toggle' => $has_children ? 'dropdown' : '',
      'aria-expanded' => 'false',
    ];
    $attr_string = implode(' ', array_filter(array_map(
      fn($k, $v) => $v ? "$k=\"$v\"" : '',
      array_keys($attrs), $attrs
    )));

    $output .= "<a $attr_string>" . esc_html($item->title) . "</a>";
  }
}
