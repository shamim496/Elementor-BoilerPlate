<?php

namespace Elementor;

class Demo extends Widget_Base {

    public function get_name() {
        return 'elementor-demo';
    }

    public function get_title() {
        return __('Elementor Demo', 'elementor-demo');
    }

    public function get_icon() {
        return 'eicon-nerd';
    }

    public function get_categories() {
        return ['elementor-demo'];
    }

    protected function _register_controls() {
        /**
         * !Content Section
         */
        $this->start_controls_section(
            '_content_section',
            [
                'label' => __('Content', 'elementor-demo'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label'       => __('Title', 'elementor-demo'),
                'type'        => Controls_Manager::TEXT,
                'default'     => __('Hello World', 'elementor-demo'),
                'placeholder' => __('Type your title here', 'elementor-demo'),
            ]
        );
        $this->add_control(
            'desc',
            [
                'label'       => __('Description', 'elementor-demo'),
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 3,
                'default'     => __('This components based blocks are ready to use as well as customize easily.', 'elementor-demo'),
                'placeholder' => __('Type your Description here', 'elementor-demo'),
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            /**
             * ! Style Section
             */
            '_style_section',
            [
                'label' => __('Style', 'elementor-demo'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
?>
        <h3>ELEMENTOR DEMO</h3>
<?php
    }
}
