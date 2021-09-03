<?php

namespace Elementor;

defined('ABSPATH') || exit;

class Ekit_Wb_256 extends Widget_Base {

	public function get_name() {
		return 'ekit_wb_256';
	}


	public function get_title() {
		return esc_html__( 'New Widget', 'elementskit-lite' );
	}


	public function get_categories() {
		return ['basic'];
	}


	public function get_icon() {
		return 'eicon-cog';
	}


	protected function register_controls() {

		$this->start_controls_section(
			'content_section_256_0',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_256_slider',
			array(
				'label' => esc_html__( 'Slider', 'elementskit-lite' ),
				'type'  => Controls_Manager::SLIDER,
				'show_label' => true,
				'label_block' => true,
				'default' => array(
					'unit' => 'px',
					'size' => '30',
				),
				'size_units' => array(
					'px',
				),
			)
		);

		$this->end_controls_section();

	}


	protected function render() {
	}


}
