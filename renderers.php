<?php

class theme_nach_core_renderer extends core_renderer {


 public function navbar() {
        $items = $this->page->navbar->get_items();
        $htmlblocks = array();
        // Iterate the navarray and display each node
        $itemcount = count($items);
        $separator = get_separator();
        for ($i=0;$i < $itemcount;$i++) {
            $item = $items[$i];
            $item->hideicon = true;
            if ($i===0) {
                $content = html_writer::tag('li', $this->render($item),array('class' => 'navbar_'.$item->key.'_'.$item->type));
            } else {
                $content = html_writer::tag('li', $separator.$this->render($item),array('class' => 'navbar_'.$item->key.'_'.$item->type.' type'.$item->type));
            }
            $htmlblocks[] = $content;
        }
        
        //accessibility: heading for navbar list  (MDL-20446)
        $navbarcontent = html_writer::tag('span', get_string('pagepath'), array('class'=>'accesshide'));
        $navbarcontent .= html_writer::tag('ul', join('', $htmlblocks));
        // XHTML
        return $navbarcontent;
    }

//end class
}