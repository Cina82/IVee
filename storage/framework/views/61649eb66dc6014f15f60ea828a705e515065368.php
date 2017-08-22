<?php $__env->startSection('contents'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    

    <section class="content">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">

						<?php echo e(Lang::get('profile.showProfileTitle',['username' => $user->name])); ?>


					</div>
					<div class="panel-body">

    					<img src="<?php if($user->profile->avatar_status == 1): ?> <?php echo e($user->profile->avatar); ?> <?php else: ?> <?php echo e(Gravatar::get($user->email)); ?> <?php endif; ?>" alt="<?php echo e($user->name); ?>" class="user-avatar">

						<dl class="user-info">

							<dt>
								<?php echo e(Lang::get('profile.showProfileUsername')); ?>

							</dt>
							<dd>
								<?php echo e($user->name); ?>

							</dd>

							<dt>
								<?php echo e(Lang::get('profile.showProfileFirstName')); ?>

							</dt>
							<dd>
								<?php echo e($user->first_name); ?>

							</dd>

							<?php if($user->last_name): ?>
								<dt>
									<?php echo e(Lang::get('profile.showProfileLastName')); ?>

								</dt>
								<dd>
									<?php echo e($user->last_name); ?>

								</dd>
							<?php endif; ?>

							<dt>
								<?php echo e(Lang::get('profile.showProfileEmail')); ?>

							</dt>
							<dd>
								<?php echo e($user->email); ?>

							</dd>

							<?php if($user->profile): ?>

								<?php if($user->profile->theme_id): ?>
									<dt>
										<?php echo e(Lang::get('profile.showProfileTheme')); ?>

									</dt>
									<dd>
										<?php echo e($currentTheme->name); ?>

									</dd>
								<?php endif; ?>

								<?php if($user->profile->location): ?>
									<dt>
										<?php echo e(Lang::get('profile.showProfileLocation')); ?>

									</dt>
									<dd>
										<?php echo e($user->profile->location); ?> <br />
										Latitude: <span id="latitude"></span> / Longitude: <span id="longitude"></span> <br />

										<div id="map-canvas"></div>

									</dd>
								<?php endif; ?>

								<?php if($user->profile->bio): ?>
									<dt>
										<?php echo e(Lang::get('profile.showProfileBio')); ?>

									</dt>
									<dd>
										<?php echo e($user->profile->bio); ?>

									</dd>
								<?php endif; ?>

								<?php if($user->profile->twitter_username): ?>
									<dt>
										<?php echo e(Lang::get('profile.showProfileTwitterUsername')); ?>

									</dt>
									<dd>
										<?php echo HTML::link('https://twitter.com/'.$user->profile->twitter_username, $user->profile->twitter_username, array('class' => 'twitter-link', 'target' => '_blank')); ?>

									</dd>
								<?php endif; ?>

								<?php if($user->profile->github_username): ?>
									<dt>
										<?php echo e(Lang::get('profile.showProfileGitHubUsername')); ?>

									</dt>
									<dd>
										<?php echo HTML::link('https://github.com/'.$user->profile->github_username, $user->profile->github_username, array('class' => 'github-link', 'target' => '_blank')); ?>

									</dd>
								<?php endif; ?>
							<?php endif; ?>

						</dl>

						<?php if($user->profile): ?>
							<?php if(Auth::user()->id == $user->id): ?>

								<?php echo HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-cog', Lang::get('titles.editProfile'), array('class' => 'btn btn-small btn-info btn-block')); ?>


							<?php endif; ?>
						<?php else: ?>

							<p><?php echo e(Lang::get('profile.noProfileYet')); ?></p>
							<?php echo HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-plus ', Lang::get('titles.createProfile'), array('class' => 'btn btn-small btn-info btn-block')); ?>


						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>