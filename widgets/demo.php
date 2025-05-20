<?php
namespace Portx_Core_Help\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Portx Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Portx_Demo extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'demo-portx';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Demo Test', 'portx-core' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-posts-ticker';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'portx-category' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'portx-core' ];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Banner', 'portx-core' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'portx-core' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$this->add_control(
			'Sub_title',
			[
				'label' => __( 'Sub Title', 'portx-core' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$this->end_controls_section();

		// start style control
		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'portx-core' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'text_transform',
			[
				'label' => __( 'Text Transform', 'portx-core' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __( 'None', 'portx-core' ),
					'uppercase' => __( 'UPPERCASE', 'portx-core' ),
					'lowercase' => __( 'lowercase', 'portx-core' ),
					'capitalize' => __( 'Capitalize', 'portx-core' ),
				],
				'selectors' => [
					'{{WRAPPER}} .title' => 'text-transform: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

 <!-- slider area start -->
   <div class="tp-slider__area p-relative">
      <div class="hero-active swiper-container">
         <div class="swiper-wrapper">
            <div class=" swiper-slide tp-slider__item p-relative">
               <div class="tp-slider-right-bg tp-slider__height d-flex align-items-center "
                  data-background="assets/img/slider/slider-img.jpg">
                  <div class="tp-slider__social">
                     <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="circal">
                  </div>
                  <div class="cargo-shipping text-end ">
                     <div class="cargo-shipping-text">
                        <span>Cargo Shipping</span>
                     </div>
                  </div>
                  <div class="tp-slider__counter-number d-flex align-items-start">
                     <span>01</span>
                     <div class="tp-slider__quote-icon">
                        <i class="flaticon-quotations"></i>
                     </div>
                  </div>
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-9 col-xl-9">
                           <div class="tp-slider__content p-relative z-index-1">
                              <h2 class="tp-slider-title mb-35"><?php echo esc_html($settings['title']); ?>
                              </h2>
                              <div class="tp-slide-btn-box">
                                 <a class="thm-btn" href="about.html">EXPLORE MORE</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" swiper-slide tp-slider__item p-relative">
               <div class="tp-slider-right-bg tp-slider__height d-flex align-items-center "
                  data-background="assets/img/slider/slider-img-2.jpg">
                  <div class="tp-slider__social">
                     <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="circal">
                  </div>
                  <div class="cargo-shipping text-end">
                     <div class="cargo-shipping-text">
                        <span>Cargo Shipping</span>
                     </div>
                  </div>
                  <div class="tp-slider__counter-number d-flex align-items-start">
                     <span>03</span>
                     <div class="tp-slider__quote-icon">
                        <i class="flaticon-quotations"></i>
                     </div>
                  </div>
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-9">
                           <div class="tp-slider__content p-relative z-index-1">
                              <h2 class="tp-slider-title mb-35"><?php echo esc_html($settings['title']); ?>
                              </h2>
                              <div class="tp-slide-btn-box">
                                 <a class="thm-btn" href="about.html">EXPLORE MORE</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" swiper-slide tp-slider__item p-relative">
               <div class="tp-slider-right-bg tp-slider__height d-flex align-items-center "
                  data-background="assets/img/slider/slider-img-3.jpg">
                  <div class="tp-slider__social">
                     <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                     </ul>
                  </div>
                  <div class="circal">
                  </div>
                  <div class="cargo-shipping text-end">
                     <div class="cargo-shipping-text">
                        <span>Cargo Shipping</span>
                     </div>
                  </div>
                  <div class="tp-slider__counter-number d-flex align-items-start">
                     <span>02</span>
                     <div class="tp-slider__quote-icon">
                        <i class="flaticon-quotations"></i>
                     </div>
                  </div>
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-9">
                           <div class="tp-slider__content p-relative z-index-1">
                              <h2 class="tp-slider-title mb-35"><?php echo esc_html($settings['title']); ?>
                              </h2>
                              <div class="tp-slide-btn-box">
                                 <a class="thm-btn" href="about.html">EXPLORE MORE</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-slider__nav text-end">
            <button class="hero-button-next"><i class="fa-regular fa-angle-left"></i></button>
            <button class="hero-button-prev"><i class="fa-regular fa-angle-right"></i></button>
         </div>
      </div>
   </div>
   <!-- slider area end -->

		<?php
	}

}
