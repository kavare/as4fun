<?php get_header(); ?>

<?php get_template_part( 'parts/content', 'heading' ); ?>
<div class="row">
<!-- Row for main content area -->
	<div class="small-12 large-8 columns" role="main">
		<div class="intro-box">
		<?php if (is_tax( 'connection_target', 'children' )): ?>
			<p>下午時分，下課鐘聲在校園迴廊間迴盪不餘，來自四面八方的孩子在走廊上分門別類地依各路隊排列整齊。一顆顆頂著黃色小帽的圓頭魚貫地從樓梯上一階又一階跳了下來，亂中有序的隊伍穿梭在校園的操場，相當一致地朝向他們各自的目標邁進─放學。</p>
			<p>「明天見！」同學們相互道別後各自離開。每個人放學後都有屬於自己的歸所，家、球場或是安親班。但是卻有一群來自不同年級、不同班級、不同家庭的小朋友們，他們並沒有回家，也沒有去安親班。他們窩在這裏─放學窩。</p>
			<p>小朋友來到放學窩的任務可不是只有完成學校功課這麼簡單，他們還需要想盡辦法在這裡使勁地玩耍。每天待在相同的教室，總是方方正正的桌椅，一模一樣的玩具，若是沒有豐富的想像力和創造力，可是玩不出什麼把戲。除此之外，在面對不同年齡的大朋友、小朋友時，在對待不同性別的男生、女生時，在和不同的志工老師互動時，他們都得學會去包容多元並進的小型社會，與社會中的成員彼此相互溝通，並且在此環境中尋找到最適合自己的生活習性。他們的任務可是相當繁重的呢！</p>
			<p>他們在這裡是全然地被接納和信任。當他們感到焦慮和不安，他們會習慣性地回到這裡，重新尋得那熟悉的安全感後，整頓心情再次出發。離開這裡，他們能夠勇敢且帶有自信地表達自己，追尋自己。再次回到這裡，他們是帶著豐滿的羽翼！</p>

		<?php elseif (is_tax( 'connection_target', 'teens' )): ?>
			<p>五年前，放學窩在國順里開始紮根，當時的小朋友年紀最大的如今都已高中，當年的小一則要進入小學生活的最後一年。我們漸漸發現，這些孩子各自有各自的需求、煩惱和夢想，放心窩青少年部的出現，便是要針對這些需求、煩惱和夢想，為孩子添上一雙羽翼，使他們能展翅飛翔。</p>
			<p>我們的孩子不是被給予的對象，我們的孩子是一個個獨立的個體，放心窩對孩子的意義除了我們的核心精神「陪伴」之外，青少年部會從旁協助這些越來越早熟的「小大人」，使他們在人生的道路中，能夠開始做出屬於自己的決定、完成自己的想望、承擔自己的責任，不僅止於遙遠的有朝一日，而是從現在開始，他們就開始體認自己作為社區的一部份，並在自我成長的過程中，與整個社群共同發光發熱。		</p>
		<?php else: ?>
		<?php endif; ?>
		</div>
		<div class="row card-container">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'parts/content', 'card' ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'parts/content', 'none' ); ?>

			<?php endif; // end have_posts() check ?>
		</div>

	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar('connection'); ?>
</div>
<?php get_footer(); ?>
