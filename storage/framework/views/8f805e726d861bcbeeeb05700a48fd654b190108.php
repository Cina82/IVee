<?php $__env->startSection('content'); ?>
 <div class="background">
    <div class="page-grid theme-full-bleed-at-xs">
        <div class="column-lg-6">
			
            <quote-list class="WorkInbox ng-isolate-scope">
                                    <div class="EmptyState">
                                                    <div class="EmptyState-icon">
                                <svg-icon type="work--empty_states_icons--empty_active_icon" size="lg" class="ng-scope theme-large IconContainer"><svg class="Icon" viewBox="0 0 48 48">
    <use xlink:href="#thumbprinticon-work--empty_states_icons--empty_active_icon_48"></use>
</svg>
</svg-icon>
                            </div>
                <div class="EmptyState-message">
                                While you’re waiting for customers, check out helpful suggestions in our
                                <a href="https://www.thumbtack.com/pro-center/proassist/pro-tips-guide">
                                    Pro Tips Guide
                                </a>
                            </div>
                                            </div>
                            </quote-list>
        </div>
    </div>

    <alert alert-id="quote-archive-error" theme="caution" class="ng-scope"><div class="alert T2-S alert--caution" ng-class="{
        'alert--visible': alert.isVisible,
        'alert--caution': alert.theme === 'caution',
        'alert--success': alert.theme === 'success',
    }">

    <div class="alert__content">
        <div ng-transclude=""><span class="ng-scope">
        Could not archive this quote because it is already archived. Please reload the page.
    </span></div>
        <div class="alert__message ng-binding" ng-bind="alert.message"></div>
        <svg-icon class="alert__close ng-scope theme-small IconContainer" type="close" size="sm" ng-click="alert.hide()"><svg class="Icon" viewBox="0 0 16 16">
    <use xlink:href="#thumbprinticon-close_16"></use>
</svg>
</svg-icon>
    </div>
</div>
</alert>

    <pa-retention-offer-status check-mark-img-url="https://static.thumbtackstatic.com/_assets/images/release/modules/pa-retention-offer-status/images/green_check_mark-8e4b4a26.svg" sorry-mark-img-url="https://static.thumbtackstatic.com/_assets/images/release/modules/pa-retention-offer-status/images/sorry_mark-0c8b0480.svg" class="ng-isolate-scope"><modal-standard modal-id="pa-retention-offer-status-modal" class="ng-isolate-scope" style="display: block;"><div class="ModalStandard" ng-class="{
        'is-visible': modalStandard.isVisible,
        'theme-opaque': modalStandard.options.themeOpaque,
        'theme-white-background': modalStandard.options.themeWhiteBackground,
    }" backdrop="">

    <button ng-hide="hideClose" class="ModalStandard-close Link" closes-modal-on-click="">

        <svg-icon type="close" size="sm" class="ng-scope theme-small IconContainer"><svg class="Icon" viewBox="0 0 16 16">
    <use xlink:href="#thumbprinticon-close_16"></use>
</svg>
</svg-icon>
    </button>
    <div class="page-grid" backdrop="">
        <div class="column-lg-4 column-lg-offset-1" backdrop="">
            <div class="ModalStandard-container" backdrop="">
                <div class="ModalStandard-contents" ng-transclude="">
    <div class="pa-retention-offer-status ng-scope">
        <!-- ngIf: paRetentionOfferStatus.modeIsSuccess -->

        <!-- ngIf: !paRetentionOfferStatus.modeIsSuccess --><div ng-if="!paRetentionOfferStatus.modeIsSuccess" class="ng-scope">
            <img class="tp-margin-bottom--double" ng-src="https://static.thumbtackstatic.com/_assets/images/release/modules/pa-retention-offer-status/images/sorry_mark-0c8b0480.svg" alt="fail_icon" src="https://static.thumbtackstatic.com/_assets/images/release/modules/pa-retention-offer-status/images/sorry_mark-0c8b0480.svg">
            <div class="tp-heading-4 tp-margin-bottom">
                Oops!
            </div>
            <div class="tp-heading-6 tp-margin-bottom--quad">
                It looks like you've already claimed this offer.
            </div>

            <button class="tp-button pa-retention-offer-status__button" ng-click="paRetentionOfferStatus.closeSelf()">
                Dismiss
            </button>
        </div><!-- end ngIf: !paRetentionOfferStatus.modeIsSuccess -->
    </div>
</div>
            </div>
        </div>
    </div>
</div>
</modal-standard>
</pa-retention-offer-status>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proffetionalDash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>