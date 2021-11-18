<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<main>
	<section class="section-social">
		<div class="social">
			<li class="social__item">
				<a href="https://twitter.com/OpenWebSandbox">
					<img class="social__img" src="img/twitter.png">
				</a>
			</li>
			<li class="social__item">
				<a href="#discord">
					<img class="social__img" src="img/discord.png">
				</a>
			</li>
			<li class="social__item">
				<a href="#telegram">
					<img class="social__img" src="img/telegram.png">
				</a>
			</li>
			<li class="social__item">
				<a href="https://medium.com/open-web-sandbox-near/tagged/open-web-sandbox">
					<img class="social__img" src="img/medium.png">
				</a>
			</li>
			<li class="social__item">
				<a href="https://www.youtube.com/channel/UC7TUaIxZM1HbdI_NLSwiDug/featured">
					<img class="social__img" src="img/youtube.png">
				</a>
			</li>
		</div>
	</section>


	<section class="section-presentation">
		<div id="home"><a name="home"></a></div>
		<div class="presentation">
			<div class="presentation__logo">
				<div class="presentation__logo-box">
					<img src="img/ows-white.png" alt="Logo" class="presentation__image">
				</div>
			</div>
			<div class="presentation__slogan">
				<div class="presentation__text-box">
					<h2 class="heading-primary heading-primary--sub">Open Web Sandbox</h2>
				</div>
				<div class="presentation__text-box">
					<h1 class="heading-primary heading-primary--main">Play, learn, earn</h1>
					<img src="img/near_icon.png" class="presentation__near-logo--big">
				</div>
				<div class="presentation__buttons">
					<div class="presentation__btn-black">
						<a href="#" class="btn btn--black btn--animated">DISCOVER OWS</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section-about">
		<div id="about"><a name="about"></a></div>
		<div class="about">
			<div class="about__title">
				<h3 class="about__title">What is OWS?</h3>
			</div>
			<div class="about__text">
				<p class="paragraph">
					A human-centric digital hub for everyone wishing to engage with projects building on top of  the NEAR protocol. The  Open Web Sandbox is a community based organisation within the NEAR protocol ecosystem. Our mission is to facilitate collaboration between communities that seek to create opportunities  through projects, and contributors that want to take those opportunities and contribute to the ecosystem.
				</p>
			</div>
		</div>
	</section>

	<section class="section-actions">
		<div class="title">
			<h2 class="heading-secondary">
				Get Started
			</h2>
		</div>
		<div class="action">
			<!-- <div class="action__side">
				<p class="action__side--text">Communities</p>
				<svg class="action__side--line" height="100%" width="100%">
					<line y2="80%" x2="50%" y1="20%" x1="50%"/>
					</svg>
				
				<p class="action__side--number">01</p>
			</div> -->
			<div class="action__right">
				<p class="action__numbering">
					01                             
				</p>
				<h3 class="heading-tertiary u-margin-bottom-small action__title">Communities</h3>
				<p class="action__text">
					Reach your goals and grow your project in the NEAR community ecosystem.                             
				</p>
				<a href="https://app.gitbook.com/o/dm3L1Gwva8uqVE3Ok9HX/s/8P5weA3EWcUQghqmt5em/engage/join-ows-as-a-community" class="btn btn--transparent action__cta">Join as a community</a>
			</div>
			<div class="action__content">
				<p class="action__long-desc">
				Within the NEAR ecosystem, we classify communities as either projects (DApps) building on top of NEAR, or Guilds (organisations). Essentially, they are an orgnisation composed of individuals that see the NEAR Protocol as the best environment to carry out their projects.
				</p>
				<!-- <p class="action__what">What can you do?</p> -->
				<ul class="action__options">
					<li class="action__options--item"><a href="https://app.gitbook.com/o/dm3L1Gwva8uqVE3Ok9HX/s/8P5weA3EWcUQghqmt5em/engage/join-ows-as-a-community/get-support-as-a-community" class="btn-text">Get support as a Community &rarr;</a></li> 
					<li class="action__options--item"><a href="https://app.gitbook.com/o/dm3L1Gwva8uqVE3Ok9HX/s/8P5weA3EWcUQghqmt5em/c/YkrGkpB5qcc0OIYS7PNh/engage/join-ows-as-a-community/about-communities" class="btn-text">About Communities &rarr;</a></li>     
				</ul>                
			</div>
		</div>

		<div class="action">
			<!-- <div class="action__side">
				<p class="action__side--text">Contributors</p>
				<svg class="action__side--line" height="100%" width="100%">
					<line y2="80%" x2="50%" y1="20%" x1="50%"/>
					</svg>
				
				<p class="action__side--number">02</p>
			</div> -->
			<div class="action__right">
				<p class="action__numbering">
					02                            
				</p>
				<h3 class="heading-tertiary u-margin-bottom-small action__title">Contributors</h3>
				<p class="action__text">
					Get engaged in the OWS ecosystem by completing tasks set out by communities. 
				</p>
				<a href="https://app.gitbook.com/o/dm3L1Gwva8uqVE3Ok9HX/s/8P5weA3EWcUQghqmt5em/engage/join-ows-as-a-contributor" class="btn btn--transparent action__cta">Join as a contributor</a>
			</div>
			<div class="action__content">
				<p class="action__long-desc">
					Within the NEAR ecosystem, contributors are individuals creating content for the ecosystem. They can take on tasks from projects that communities offer, getting rewarded for them by OWS upon completion. 
				</p>
				<!-- <p class="action__what">What can you do?</p> -->
				<ul class="action__options">
					<li class="action__options--item"><a href="https://app.gitbook.com/o/dm3L1Gwva8uqVE3Ok9HX/s/8P5weA3EWcUQghqmt5em/engage/payment-request-guideline" class="btn-text">Make Payment Request &rarr;</a></li> 
				</ul>                
			</div>
		</div>
		<div class="action">
			<!-- <div class="action__side">
				<p class="action__side--text">Opportunities</p>
				<svg class="action__side--line" height="100%" width="100%">
					<line y2="80%" x2="50%" y1="20%" x1="50%"/>
					</svg>
				
				<p class="action__side--number">03</p>
			</div> -->
			<div class="action__right">
				<p class="action__numbering">
					03                           
				</p>
				<h3 class="heading-tertiary u-margin-bottom-small action__title">Opportunities</h3>
				<p class="action__text">
					Find the right task by looking at our list of opportunities and get rewarded.
				</p>
				<a href="https://app.gitbook.com/o/dm3L1Gwva8uqVE3Ok9HX/s/8P5weA3EWcUQghqmt5em/engage/view-current-opportunities" class="btn btn--transparent action__cta">View current opportunities</a>
			</div>
			
			<div class="action__content">
				<p class="action__long-desc">
					Within the NEAR ecosystem, opportunities are tasks set out by both OWS and all other communities on the NEAR Protocol. You can choose which ever opportunity you are interested in from the opportunities dashboard. 
				</p>
				<!-- <p class="action__what">What can you do?</p> -->
				<ul class="action__options">
					<li class="action__options--item"><a href="#" class="btn-text">View project dashboard &rarr;</a></li> 
				</ul>                
			</div>
		</div>
	</section>


	<section class="section-news">
		<div id="news"><a name="news"></a></div>
		<div class="title">
			<h2 class="heading-secondary">
				News and Announcements
			</h2>
		</div>
		<div class="posts">
			
			<?php
				// Define our WP Query Parameters 
				 $query_options = array(
					 'posts_per_page' => 3,
				 );
				 $the_query = new WP_Query( $query_options ); 
			
				 while ($the_query -> have_posts()) : $the_query -> the_post(); 
			?>
				<div class="post">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Team member" class="post__img">
					<p class="post__title"><?php echo get_the_title(); ?></p>
					<p class="post__excerpt">
						<?php echo get_the_excerpt(); ?>
					</p>
					<p>
						<a href="<?php echo get_the_permalink(); ?>" class="btn btn--purple btn--animated action__cta read-more">Read More</a>
					</p>
				</div>
			
			<?php 
				 endwhile;
				 wp_reset_postdata();
			 ?>
			
		</div>
	</section>

	
	<section class="section-team">
		<div id="team"><a name="team"></a></div>
		<div class="u-margin-bottom-big u-margin-top-huge">
			<h2 class="heading-secondary">
				Our Team
			</h2>
		</div>

		<div class="team">
			<div class="member">
				<img src="img/team/valentina.jpg" alt="Team member" class="member__img">
				<p class="member__name">Valentina</p>
				<!-- <p class="member__near-wallet">NEAR Wallet: videvidts.near</p> -->
				<p class="member__forum-username">@videvidts</p>
				<p class="member__description">
					OWS moderator, optimistic software engineer in the making. Passionate about books, stand-up comedy and making the world fairer through new, decentralized technologies.
				</p>
			</div>

			<div class="member">
				<img src="img/ben.jpg" alt="Team member" class="member__img">
				<p class="member__name">Jac</p>
				<!-- <p class="member__near-wallet">NEAR Wallet: jacoponuti.near</p> -->
				<p class="member__forum-username">@Jacopo</p>
				<p class="member__description">
					Assistant project manager at OWS. My background is in the philosophy of information, and what better place to be than at NEAR, an ecosystem that is creating new methods of information communication.
				</p>
			</div>

			<div class="member">
				<img src="img/ben.jpg" alt="Team member" class="member__img">
				<p class="member__name">Sammy Flores</p>
				<!-- <p class="member__near-wallet">NEAR Wallet: samtoshi_f_baby</p> -->
				<p class="member__forum-username">@Samtoshi_F_Baby</p>
				<p class="member__description">
					I’m a independent comic book artist, NFT Creator, and Moderator for the Open Web Sandbox. I’m extremely fascinated with how smart contracts and NFTs will play a role in the future and look forward to seeing how I can contribute to helping the OWS and the NEAR ecosystem play a part in that future. My DMs are open and I’m always looking to collaborate.
				</p>
			</div>

		<div class="member">
			<img src="img/ben.jpg" alt="Team member" class="member__img">
			<p class="member__name">Ana</p>
			<!-- <p class="member__near-wallet">NEAR Wallet: ananastya.near</p> -->
			<p class="member__forum-username">@AnaNastya</p>
			<p class="member__description">
				Have a background in digital and e-commerce management. Here to unite Sandboxers from all over the world and increase the NEAR community.                    </p>
		</div>
		<div class="member">
			<img src="img/team/vasilya.jpg" alt="Team member" class="member__img">
			<p class="member__name">Vasilya</p>
			<!-- <p class="member__near-wallet">NEAR Wallet: vrdoingthings.near</p> -->
			<p class="member__forum-username">@vrdoingthings</p>
			<p class="member__description">
				OWS Marketing Mastermind boosting engagement via hosting informative AMAs and closely communicating with OWS contributors. Continuously brainstorming and effectively executing new ways to improve the onboarding experience while leveraging data.
			</p>
		</div>

		<div class="member">
			<img src="img/team/sonya.jpg" alt="Team member" class="member__img">
			<p class="member__name">Sofia</p>
			<!-- <p class="member__near-wallet">NEAR Wallet: s4nts.near</p> -->
			<p class="member__forum-username">@Sofia_Alum</p>
			<p class="member__description">
				Aspiring to bridge the gap between humans and technology. I believe that crypto does not have to be chaotic, blockchain is not only for developers, and onboarding to NEAR can be easy and fun. Drop me a message if you’d like to talk;)                    </p>
		</div>

		<div class="member">
			<img src="img/ben.jpg" alt="Team member" class="member__img">
			<p class="member__name">Rebecca</p>
			<!-- <p class="member__near-wallet">NEAR Wallet: rebecca.near</p> -->
			<p class="member__forum-username">@mecsbecs</p>
			<p class="member__description">
				Information-sharing and organization nut (a.k.a. Community OS Specialist) @ NEAR. Coming from an arts/festival/event/business management web2 world to build web3 communities and sustainable business models.
			</p>
		</div>
	</section>
</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>