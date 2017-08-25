
@if(collect(request()->segments())->last() == 'login')
  <div class="full-footer__legal-wrap">
      <div class="tp-wrap-snap">
         <div class="full-footer__legal">
            <div class="full-footer__legal__copyright">
               © 2017 Thumbtack, Inc.
            </div>
            <ul class="full-footer__legal__docs">
               <li class="full-footer__legal__docs__item">
                  <a class="full-footer__legal__docs__link"
                     href="{{URL::to('privacy')}}">
                  Privacy Policy
                  </a>
               </li>
               <li class="full-footer__legal__docs__item">
                  <a class="full-footer__legal__docs__link"
                     href="{{URL::to('terms')}}">
                  Terms of Use
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   @else
<full-footer>
   <div class="full-footer">
      <div class="tp-wrap-snap">
            <div class="tp-grid">
            <div class="tp-col tp-col--12 tp-col--lg-2">
               <div class="full-footer__item is-collapsed"
                  ng-class="{'is-collapsed': selectedMenu !== 'Company'}">
                  <div class="full-footer__item__title"
                     ng-click="selectedMenu === 'Company'
                     ? selectedMenu = null
                     : selectedMenu = 'Company'">
                     <div class="full-footer__item__text" dir="rtl">Company</div>
                     <div class="full-footer__item__arrow">
                        <svg-icon type="{[{ selectedMenu === 'Company'
                           ? 'up-caret'
                           : 'down-caret'
                           }]}"
                           size="sm">
                        </svg-icon>
                     </div>
                  </div>
                  <div class="full-footer__item__links">
                     <ul dir="rtl">
                        <li>
                           <a href="{{URL::to('about')}}"
                              class="full-footer__item__link">
                           About
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('jobs')}}"
                              class="full-footer__item__link">
                           Jobs
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('team')}}"
                              class="full-footer__item__link">
                           Team
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('blog')}}"
                              class="full-footer__item__link">
                           Blog
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="tp-col tp-col--12 tp-col--lg-2">
               <div class="full-footer__item is-collapsed"
                  ng-class="{'is-collapsed': selectedMenu !== 'Customers'}">
                  <div class="full-footer__item__title"
                     ng-click="selectedMenu === 'Customers'
                     ? selectedMenu = null
                     : selectedMenu = 'Customers'">
                     <div class="full-footer__item__text" dir="rtl">Customers</div>
                     <div class="full-footer__item__arrow">
                        <svg-icon type="{[{ selectedMenu === 'Customers'
                           ? 'up-caret'
                           : 'down-caret'
                           }]}"
                           size="sm">
                        </svg-icon>
                     </div>
                  </div>
                  <div class="full-footer__item__links">
                     <ul dir="rtl">
                        <li>
                           <a href="{{URL::to('howItWorks')}}"
                              class="full-footer__item__link">
                           How it works
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('safety')}}"
                              class="full-footer__item__link">
                           Safety
                           </a>
                        </li>
                        <li>
                           <a href="https://r.yoz.io/Z3.c.r"
                              class="full-footer__item__link">
                           iPhone app
                           </a>
                        </li>
                        <!-- <li>
                           <a href="{{URL::to('nearMe')}}"
                              class="full-footer__item__link">
                           Services Near Me
                           </a>
                        </li> -->
                        <li>
                           <a href="{{URL::to('prices')}}"
                              class="full-footer__item__link">
                           Cost Estimates
                           </a>
                        </li> 
                        <li>
                           <a href="{{URL::to('serviceGuides')}}"
                              class="full-footer__item__link">
                           Service Guides
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('howTo')}}"
                              class="full-footer__item__link">
                           How To Pages
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="tp-col tp-col--12 tp-col--lg-2">
               <div class="full-footer__item is-collapsed"
                  ng-class="{'is-collapsed': selectedMenu !== 'Pros'}">
                  <div class="full-footer__item__title"
                     ng-click="selectedMenu === 'Pros'
                     ? selectedMenu = null
                     : selectedMenu = 'Pros'">
                     <div class="full-footer__item__text" dir="rtl">Pros</div>
                     <div class="full-footer__item__arrow">
                        <svg-icon type="{[{ selectedMenu === 'Pros'
                           ? 'up-caret'
                           : 'down-caret'
                           }]}"
                           size="sm">
                        </svg-icon>
                     </div>
                  </div>
                  <div class="full-footer__item__links">
                     <ul dir="rtl">
                        <li>
                           <a href="{{URL::to('howThumbtackWorks')}}"
                              class="full-footer__item__link">
                           How it works
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('pro')}}"
                              class="full-footer__item__link">
                           Sign up
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('proCenter')}}" class="full-footer__item__link">
                           Pro center
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('stories')}}"
                              class="full-footer__item__link">
                           Success stories
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('proApp')}}"
                              class="full-footer__item__link">
                           Mobile app
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="tp-col tp-col--12 tp-col--lg-2">
               <div class="full-footer__item is-collapsed"
                  ng-class="{'is-collapsed': selectedMenu !== 'Support'}">
                  <div class="full-footer__item__title"
                     ng-click="selectedMenu === 'Support'
                     ? selectedMenu = null
                     : selectedMenu = 'Support'">
                     <div class="full-footer__item__text" dir="rtl">Support</div>
                     <div class="full-footer__item__arrow">
                        <svg-icon type="{[{ selectedMenu === 'Support'
                           ? 'up-caret'
                           : 'down-caret'
                           }]}"
                           size="sm">
                        </svg-icon>
                     </div>
                  </div>
                  <div class="full-footer__item__links">
                     <ul dir="rtl">
                        <li>
                           <a href="https://help.thumbtack.com/"
                              class="full-footer__item__link">
                           Help center
                           </a>
                        </li>
                        
                     </ul>
                  </div>
               </div>
            </div>
             <div class="tp-col tp-col--12 tp-col--lg-4 full-footer__logos">
            <div class="full-footer__logos__item">
            	<div>
	               <a href="/" class="full-footer__logos__logo">
	                  <!-- <svg-icon type="thumbtack-logo_178x28" alt="Thumbtack">
	                  </svg-icon> -->
	                   <img class="GlobalHeader" src="{{URL::to('public/assets/img/Logo/LogoOrange.png')}}" alt="Thumbtack" width="178" height="">
	               </a>
                </div>
                
               <ul class="full-footer__logos__social"  style="padding-top:40px;">
            
                   <li class="full-footer__logos__social__item">
                     <a href="https://www.facebook.com/Thumbtack" target="_blank">
                        <span class="facebook"></span>
                        </a>
                  </li>
                  <li class="full-footer__logos__social__item">
                     <a href="https://www.facebook.com/Thumbtack"
                        class="full-footer__logos__social__link">
                        <svg-icon type="facebook" size="md"></svg-icon>
                     </a>
                  </li>
                  <li class="full-footer__logos__social__item">
                     <a href="http://pinterest.com/thumbtackboards/"
                        class="full-footer__logos__social__link">
                        <svg-icon type="pinterest" size="md"></svg-icon>
                     </a>
                  </li>
                  <li class="full-footer__logos__social__item">
                     <a href="https://plus.google.com/110365850422119512162/posts"
                        class="full-footer__logos__social__link">
                        <svg-icon type="google-plus" size="md"></svg-icon>
                     </a>
                  </li>
                  <li class="full-footer__logos__social__item">
                     <a href="https://www.instagram.com/thumbtack/"
                        class="full-footer__logos__social__link">
                        <svg-icon type="instagram" size="md"></svg-icon>
                     </a>
                  </li>
               </ul>
               
               <div class="full-footer__logos__guarantee">
                  <div class="TtGuaranteeText">
                     <a href="/guarantee/"
                        class="TtGuaranteeText-inner">
                        <svg-icon type="tt-guarantee-emblem" size="lg" class="TtGuaranteeText-emblem">
                        </svg-icon>
                        <div class="TtGuaranteeText-textContainer">
                           <div class="TtGuaranteeText-textContainer-title">
                              Thumbtack Guarantee
                           </div>
                           <div class="TtGuaranteeText-textContainer-text">
                              $1M Property Protection
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         </div>

    
      </div>
   </div>
   <div class="full-footer__legal-wrap">
      <div class="tp-wrap-snap">
         <div class="full-footer__legal">
            <div class="full-footer__legal__copyright">
               © 2017 Thumbtack, Inc.
            </div>
            <ul class="full-footer__legal__docs">
               <li class="full-footer__legal__docs__item">
                  <a class="full-footer__legal__docs__link"
                     href="{{URL::to('privacy')}}">
                  Privacy Policy
                  </a>
               </li>
               <li class="full-footer__legal__docs__item">
                  <a class="full-footer__legal__docs__link"
                     href="{{URL::to('terms')}}">
                  Terms of Use
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   </div>
</full-footer>
@endif