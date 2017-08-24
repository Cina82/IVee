
<div class="glorious-header GlobalHeader" data-section="header">
   <div class="wrapper">
      <div class="row header-row">
         <div class="header-logo">
            <a href="{{URL::to('pro')}}">
              <!--  <svg-icon class="IconContainer ng-scope" style="min-width:178px;min-height:28px" twig-rendered="">
                  <svg class="Icon" viewBox="0 0 178 28">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#thumbprinticon-thumbtack-logo_178x28"></use>
                  </svg>
               </svg-icon> -->
                <img class="GlobalHeader" src="{{URL::to('public/assets/img/Logo/LogoOrange.png')}}" alt="Thumbtack" width="178" height="">
               <img class="GlobalHeader-fallbackLogo" src="https://static1.thumbtackstatic.com/media/logos/thumbtack_brand_152x24.svg" alt="Ivee" width="152" height="24">
            </a>
        </div>
          <div class="header-middle-container">
            <a class="middle-tab " href="{{URL::to('explore')}}" event-track="dashboard/click explore" event-track-on="click">Explore
            </a>
            </div>
         <div class="header-right-container">
         	@if (Auth::User())
           	 <div class="header-navigation ">
            	
               <a href="{{URL::to('/home')}}" rel="nofollow" event-track="home page/clicked join as a pro" event-track-on="click class="gray-link">
               My Profile
               </a>
               <a href="{{URL::to('/logout')}}" rel="nofollow" event-track="home page/clicked sign up" event-track-on="click" class="gray-link">
               Logout
               </a>
               
            </div>
            @else
             <div class="header-navigation ">
            	
               <a href="{{URL::to('pro')}}" rel="nofollow" event-track="home page/clicked join as a pro" event-track-on="click class="gray-link">
               Join as a Pro
               </a>
               <a href="{{URL::to('choose-account')}}" rel="nofollow" event-track="home page/clicked sign up" event-track-on="click" class="gray-link">
               Sign Up
               </a>
               <a href="{{URL::to('login') }}" rel="nofollow" event-track="home page/clicked log in" event-track-on="click" class="gray-link log-in-link">
               Log In
               </a>
            </div>
            @endif
            
         </div>
      </div>
   </div>
     <input type="checkbox"
           id="mobile-navigation-toggle"
           class="mobile-navigation-toggle ">
        <label
           for="mobile-navigation-toggle"
           class="mobile-navigation-trigger ">
           <svg-icon class="GlobalHeader-down" type="hamburger" size="md"></svg-icon>
           <svg-icon class="GlobalHeader-up" type="close-experimental" size="md"></svg-icon>
        </label>
        <div class="glorious-navigation-wrapper
           hidden ">
           <div class="glorious-navigation
              column-lg-6 ">
              <div class="wrapper browse-wrapper empty-default">
                 <ul class="navigation-row">
                 	@if (Auth::User())
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="{{URL::to('/home')}}" rel="nofollow"
                       event-track="home page/clicked join as a pro"
                       event-track-on="click">My Profile</a></li>
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="{{URL::to('explore')}}">Explore</a></li>
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="{{URL::to('/logout')}}" rel="nofollow"
                       event-track="home page/clicked sign up"
                       event-track-on="click">Logout</a></li>
                    
                    
                    @else
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="{{URL::to('pro')}}" rel="nofollow"
                       event-track="home page/clicked join as a pro"
                       event-track-on="click">Join as a Pro</a></li>
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="{{URL::to('choose-account')}}" rel="nofollow"
                       event-track="home page/clicked sign up"
                       event-track-on="click">Sign Up</a></li>
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="{{URL::to('login')}}" rel="nofollow"
                       event-track="home page/clicked log in"
                       event-track-on="click">Log In</a></li>
                    <li class="mobile-navigation-item GlobalHeader-loginLink"><a href="{{URL::to('explore')}}">Explore</a></li>
                    @endif
                 </ul>
              </div>
           </div>
     </div>
</div>


 






