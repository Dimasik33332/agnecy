<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>


<section class="bg-[#f1eded] home">
	<div class="2xl:max-w-[1283px] xl:max-w[1200px] lg:max-w-[1024px] md:max-w-[768px] sm:max-w-[640px] max-w-[360px] p-0 mx-auto">
		<div class="flex flex-wrap lg:flex-nowrap pt-16 md:pt-36 lg:pt-48 lg:pb-28 md:pb-24 pb-16 px-4 xl:px-0">
			<div class="w-full lg:w-1/2 text-center justify-center lg:text-left lg:justify-start mb-16 lg:mb-0">
				<h1 class="text-black text-3xl lg:text-5xl 2xl:text-7xl xl:text-6xl font-bold mb-6 xl:mb-10 tracking-wide"><?php the_field('intro_title') ?></h1>
				<p class="text-[#a5a2a2] font-medium mb-6 xl:mb-[68px]"><?php the_field('intro_description') ?></p>
				<button data-goto=".contact" class="menu__link py-[16px] px-[66px] w-auto text-white bg-red-500 font-bold text-xl rounded-lg"><?php the_field('intro_text_button') ?></button>
			</div>
			<div class="relative lg:ml-auto w-full lg:w-[450px] 2xl:w-[550px]">
				<?php 
					$file =get_field('video');
				?>
				<video poster="<?php the_field('video_poster') ?>" class="video shadow-none w-full h-auto lg:h-[276px] xl:h-[357px]">
					<source type="video/mp4" class="w-full h-auto" src="<?php echo get_field('video'); ?>">
				</video>
				<div class="playpause"><img class="mt-[30%] mx-auto w-10 h-10" src="<?php the_field('video_play_button') ?>" alt=""></div>
			</div>
		</div>
	</div>
</section>
<section class="portfolio">
	<div class="2xl:max-w-[1283px] xl:max-w[1200px] lg:max-w-[1024px] md:max-w-[768px] sm:max-w-[640px] max-w-[360px] md:px-4 xl:px-0 mx-auto">
		<div class="flex flex-wrap 2xl:flex-nowrap lg:pt-28 pt-8 lg:pb-12 text-center justify-center 2xl:text-left 2xl:justify-start">
			<div class="w-auto md:w-[520px] mb-10 lg:mb-20 2xl:mb-0">
				<h1 class="text-[#333333] mb-4 text-2xl md:text-4xl font-bold lg:mb-12 tracking-wider"><?php the_field('about_us_title') ?></h1>
				<p class="text-[#333333] font-medium mb-6 lg:mb-12"><?php the_field('about_us_description') ?></p>
				<button class="py-[16px] px-[66px] border-2 border-red-500 text-red-500 hover:text-white hover:bg-red-500 transition-colors duration-700 transform font-bold text-xl rounded-lg mb-6 lg:mb-0"><?php the_field('about_us_button') ?></button>
			</div>
			<div class="2xl:w-1/2 2xl:ml-[75px]">
				<div class="flex flex-wrap sm:justify-center justify-end text-left">
					<div class="w-[175px] lg:w-[220px] 2xl:w-[306px] px-0 lg:px-4 mb-9">
						<img src="<?php the_field('about_us_card_1_image') ?>" alt="" class="mb-6">
						<h1 class="text-[#4c4c4c] font-medium text-xl md:text-2xl mb-4"><?php the_field('about_us_card_1_title') ?></h1>
						<p class="text-[#4c4c4c] w-[150px] md:w-auto break-words"><?php the_field('about_us_card_1_description') ?></p>
					</div>
					<div class="w-[175px] lg:w-[220px] 2xl:w-[306px] px-0 lg:px-4 mb-9">
						<img src="<?php the_field('about_us_card_2_image') ?>" alt="" class="mb-6">
						<h1 class="text-[#4c4c4c] font-medium text-xl md:text-2xl mb-4"><?php the_field('about_us_card_2_title') ?></h1>
						<p class="text-[#4c4c4c] w-[150px] md:w-auto break-words"><?php the_field('about_us_card_2_description') ?></p>
					</div>
					<div class="w-[175px] lg:w-[220px] 2xl:w-[306px] px-0 lg:px-4 mb-9">
						<img src="<?php the_field('about_us_card_3_image') ?>" alt="" class="mb-6">
						<h1 class="text-[#4c4c4c] font-medium text-xl md:text-2xl mb-4"><?php the_field('about_us_card_3_title') ?></h1>
						<p class="text-[#4c4c4c] w-[150px] md:w-auto break-words"><?php the_field('about_us_card_3_description') ?></p>
					</div>
					<div class="w-[175px] lg:w-[220px] 2xl:w-[306px] px-0 lg:px-4 mb-9">
						<img src="<?php the_field('about_us_card_4_image') ?>" alt="" class="mb-6">
						<h1 class="text-[#4c4c4c] font-medium text-xl md:text-2xl mb-4"><?php the_field('about_us_card_4_title') ?></h1>
						<p class="text-[#4c4c4c] w-[150px] md:w-auto break-words"><?php the_field('about_us_card_4_description') ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pb-8 lg:pb-0">
	<div class="2xl:max-w-[1283px] xl:max-w[1200px] lg:max-w-[1024px] md:max-w-[768px] sm:max-w-[640px] max-w-[360px] p-0 mx-auto">
		<div class="flex flex-col items-center lg:py-24 py-8 text-center justify-center md:text-left md:justify-start">
			<h1 class="lg:text-4xl text-3xl font-bold text-[#333333] mb-8 tracking-wider"><?php the_field('portfolio_title') ?></h1>
			<p class="text-[#333333] md:max-w-[506px] mb-8 text-center"><?php the_field('portfolio_description') ?></p>
			<hr class="border-none bg-red-500 h-[2px] w-[130px]"> 
		</div>
		<div>
			<div>
				<div class="mb-8 lg:mb-16 flex flex-col md:flex-row ml-4 lg:ml-0 justify-center">
					<a href="#" class="active:text-red-500 hover:text-red-500 text-[#4c4c4c] text-lg lg:text-2xl font-medium md:mr-5 lg:mr-[50px]">ALL</a>
					<a href="#" class="active:text-red-500 hover:text-red-500 text-[#4c4c4c] text-lg lg:text-2xl font-medium md:mr-5 lg:mr-[50px]">PRINT TEMPLATE</a>
					<a href="#" class="active:text-red-500 hover:text-red-500 text-[#4c4c4c] text-lg lg:text-2xl font-medium md:mr-5 lg:mr-[50px]">WEB TEMPLATE</a>
					<a href="#" class="active:text-red-500 hover:text-red-500 text-[#4c4c4c] text-lg lg:text-2xl font-medium md:mr-5 lg:mr-[50px]">USER INTERFACE</a>
					<a href="#" class="active:text-red-500 hover:text-red-500 text-[#4c4c4c] text-lg lg:text-2xl font-medium">MOCK-UP</a>
				</div>
			</div>
		</div>
		<div class="flex flex-wrap justify-center">
			<img src="<?php the_field('portfolio_image_1') ?>" alt="" class="h-36 lg:h-52 2xl:h-72 w-[160px] lg:w-52 2xl:w-[298px] mr-5 mb-5">
			<img src="<?php the_field('portfolio_image_2') ?>" alt="" class="h-36 lg:h-52 2xl:h-72 w-[160px] lg:w-52 2xl:w-[298px] mr-5 mb-5">
			<img src="<?php the_field('portfolio_image_3') ?>" alt="" class="h-36 lg:h-52 2xl:h-72 w-[160px] lg:w-52 2xl:w-[298px] mr-5 mb-5">
			<img src="<?php the_field('portfolio_image_4') ?>" alt="" class="h-36 lg:h-52 2xl:h-72 w-[160px] lg:w-52 2xl:w-[298px] mr-5 mb-5">
			<img src="<?php the_field('portfolio_image_5') ?>" alt="" class="h-36 lg:h-52 2xl:h-72 w-[160px] lg:w-52 2xl:w-[298px] mr-5 mb-5">
			<img src="<?php the_field('portfolio_image_6') ?>" alt="" class="h-36 lg:h-52 2xl:h-72 w-[160px] lg:w-52 2xl:w-[298px] mr-5 mb-5">
			<img src="<?php the_field('portfolio_image_7') ?>" alt="" class="h-36 lg:h-52 2xl:h-72 w-[160px] lg:w-52 2xl:w-[298px] mr-5 mb-5">
			<img src="<?php the_field('portfolio_image_8') ?>" alt="" class="h-36 lg:h-52 2xl:h-72 w-[160px] lg:w-52 2xl:w-[298px] mr-5 mb-5">
		</div>
	</div>
</section>
<section class="lg:pt-24 pb-8 about__us">
	<div class="2xl:max-w-[1283px] xl:max-w[1200px] lg:max-w-[1024px] md:max-w-[768px] sm:max-w-[640px] max-w-[360px] p-0 mx-auto">
		<div class="flex flex-col mb-8 lg:mb-[90px] text-center items-center 2xl:items-start 2xl:text-left">
			<h1 class="text-4xl font-bold text-[#333333] mb-8 tracking-wider"><?php the_field('team_section_title') ?></h1>
			<p class="text-[#333333] text-lg md:w-[506px] mb-8"><?php the_field('team_section_description') ?></p>
			<hr class="border-none bg-red-500 h-[2px] w-[130px]"> 
		</div>
		<div class="flex flex-wrap lg:flex-nowrap">
			<div class="h-[458px] w-[322px] lg:flex-shrink-0 mx-auto pl-0 lg:pl-4 xl:pl-0 lg:mx-0 mb-10 lg:mb-0">
				<img src="<?php the_field('team_section_worker_photo') ?>" alt="" class="h-[458px] w-[322px]">
			</div>
			<hr class="border-none bg-red-500 h-[2px] w-[322px] mx-auto md:hidden mb-10 lg:mb-0">   
			<div class="xl:ml-[74px] lg:ml-5 flex flex-col lg:mb-[90px] text-center items-center 2xl:items-start 2xl:text-left">
				<h1 class="text-3xl font-bold text-[#333333] mb-8 tracking-wider"><?php the_field('worker_portfolio_title') ?></h1>
				<p class="text-[#333333] mb-8 xl:max-w-[642px] md:max-w-[555px]"><?php the_field('worker_portfolio_description') ?></p>
				<nav class="mb-8 lg:mb-[134px] 2xl:mb-16">
					<a href="<?php the_field('worker_portfolio_social_1') ?>" class="text-[#333333] text-xl italic font-normal tracking-wide lg:mr-3 xl:mr-[30px]">Facebook</a>
					<a href="<?php the_field('worker_portfolio_social_2') ?>" class="text-[#333333] text-xl italic font-normal tracking-wide lg:mr-3 xl:mr-[30px]">Dribble</a>
					<a href="<?php the_field('worker_portfolio_social_3') ?>" class="text-[#333333] text-xl italic font-normal tracking-wide lg:mr-3 xl:mr-[30px]">Behance</a>
					<a href="<?php the_field('worker_portfolio_social_4') ?>" class="text-[#333333] text-xl italic font-normal tracking-wide lg:mr-3">Twitter</a>
				</nav>
				<div class="flex flex-wrap xl:flex-nowrap justify-center lg:justify-start">
					<div class="thumbs mb-5 lg:mb-0 mr-0 sm:mr-5">
						<img src="<?php the_field('worker_portfolio_image_1') ?>" alt="" class="thumbs_img">
						<div class="caption">
							<span class="info"><?php the_field('worker_portfolio_image_description_1') ?></span>
						</div>
					</div>
					<div class="thumbs mb-5 lg:mb-0 mr-0 sm:mr-5">
						<img src="<?php the_field('worker_portfolio_image_2') ?>" alt="" class="thumbs_img">
						<div class="caption">
							<span class="info"><?php the_field('worker_portfolio_image_description_2') ?></span>
						</div>
					</div>
					<div class="thumbs mb-5 lg:mb-0 mr-0 sm:mr-5">
						<img src="<?php the_field('worker_portfolio_image_3') ?>" alt="" class="thumbs_img">
						<div class="caption">
							<span class="info"><?php the_field('worker_portfolio_image_description_3') ?></span>
						</div>
					</div>
					<div class="thumbs mb-5 lg:mb-0 mr-0 sm:mr-5">
						<img src="<?php the_field('worker_portfolio_image_4') ?>" alt="" class="thumbs_img">
						<div class="caption">
							<span class="info"><?php the_field('worker_portfolio_image_description_4') ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-[#f5f0dd] py-12 xl:py-[142px]">
	<div class="2xl:max-w-[1283px] xl:max-w[1200px] lg:max-w-[1024px] md:max-w-[768px] sm:max-w-[640px] max-w-[360px] p-0 mx-auto">
		<div class="flex flex-col text-center">
			<h1 class="text-3xl lg:text-4xl text-[#fdfcf8] tracking-wider font-bold xl:mb-10"><?php the_field('follow_us_title') ?></h1>
			<p class="text-[#fdfcf8] text-xl font-semibold mb-4 xl:mb-16"><?php the_field('follow_us_description') ?></p>
			<div class="flex flex-wrap lg:flex-nowrap justify-center w-72 lg:w-auto mx-auto">
				<input type="text" class="mb-6 lg:mb-0 mr-0 lg:mr-5 rounded-lg px py-[28px] px-[30px] w-full lg:w-[520px]" placeholder="Email Address...">
				<button class="bg-[#ff2d2d] text-white tracking-wider text-base font-semibold lg:w-[214px] w-full py-[28px] px-[60px] rounded-lg"><?php the_field('follow_us_button') ?></button>
			</div>
		</div>
	</div>
</section>
<section class="contact pt-8 xl:pt-20 pb-8 xl:pb-16">
	<div class="relative 2xl:max-w-[1283px] xl:max-w[1200px] lg:max-w-[1024px] md:max-w-[768px] sm:max-w-[640px] max-w-[360px] box-border p-0 mx-auto">
		<div class="flex flex-col mb-10 lg:mb-[90px] 2xl:w-[732px] text-center items-center 2xl:items-start 2xl:text-left">
			<h1 class="text-4xl font-bold text-[#333333] mb-8 tracking-wider"><?php the_field('feedback_title') ?></h1>
			<p class="text-[#333333] lg:w-[732px] text-lg mb-12"><?php the_field('feedback_description') ?></p>
			<hr class="border-none bg-red-500 h-[2px] w-[130px]">
		</div>
		<div class="flex flex-wrap lg:flex-nowrap">
			<div class="flex flex-col w-[350px] mx-auto xl:mx-0 lg:w-[732px] mb-10 lg:mb-0 lg:px-4 2xl:px-0">
			<?php echo do_shortcode( '[contact-form-7 id="330" title="Без названия"]' ); ?>
					<input type="text" placeholder="Name" class="hidden mb-11 w-full xl:mr-[54px] rounded-lg py-[28px] px-[48px] bg-[#e5e5e5] placeholder-black">
					<input type="text" placeholder="Your Mail" class="hidden mb-11 w-full rounded-lg py-[28px] px-[48px] bg-[#e5e5e5] placeholder-black">
				<textarea rows="7" placeholder="Type your message" class="hidden mb-11 rounded-lg py-[28px] px-[48px] bg-[#e5e5e5] placeholder-black"></textarea>
				<button class="hidden bg-[#ff2d2d] text-white tracking-wider text-base font-semibold py-[28px] rounded-lg">SEND MESSAGE</button>
			</div>
			<div class="2xl:pl-56">
				<div class="absolute left-0 2xl:left-[860px] xl:left-[670px] -z-10 xl:bg-[#2d2d2d] xl:h-[472px] xl:w-[481px] 2xl:w-[732px]"></div>
				<div class="px-4 2xl:px-0 py-4 lg:py-36 w-full bg-[#2d2d2d] xl:h-0 h-[95%] lg:h-[80%]">
					<h4 class="mb-5 text-white tracking-wider text-base font-semibold"><?php the_field('contact_title') ?></h4>
					<p class="mb-5 text-[#d5d5d5]"><?php the_field('contact_geolocation') ?></p>
					<p class="mb-5 text-[#d5d5d5]"><?php the_field('contact_email') ?></p>
					<p class="text-[#d5d5d5]"><?php the_field('contact_phone_number') ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
	

<?php
get_footer();
