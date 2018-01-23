@extends('layouts.customerDash')

@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/core-159e4f5e.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/full-f074da3d.css')}}">

<style type="text/css">
   .customer-profile{background-color:#fafafa}
   .hkBbxs {
    background-color: #FFF;
    border-bottom: 1px solid #e1e3e3;
    margin-bottom: 20px;
    padding: 24px 12px;
   }
   .kRxWdB {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.bNTFIO {
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.drOGPX {
    margin-bottom: 20px;
}
.fKdDck {
    background-color: #FFF;
    margin-bottom: 12px;
}
.eRmPBV {
    padding: 20px 20px 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #f4f4f4;
    max-height: 100px;
    height: 100px;
    -webkit-align-items: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    overflow: hidden;
}
.fujZfg {
    border-radius: 50%;
    border: 2px solid #FFF;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    z-index: 5;
}
.cOQDCw {
    border-radius: 50%;
    border: 2px solid #FFF;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-left: -32px;
    z-index: 4;
}
.fbVKAs {
    margin-left: 12px;
}
.gwpnRC {
    font-weight: 600;
}
.igrnWF {
    color: #8d9494;
}
.hxrIFM {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 48px;
}
.jrdDox {
    height: 124px;
    margin-bottom: 12px;
    position: relative;
    text-align: center;
    width: 124px;
}
.hYXKUb {
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 50%;
    box-shadow: 0 0 1px 1px rgba(0,0,0,0.15);
    cursor: pointer;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 124px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
    width: 124px;
}
.iediMM {
    width: 124px;
    height: 124px;
    font-size: 20px;
    position: relative;
}
.gCgasF {
    bottom: 0;
    position: absolute;
    width: 100%;
}
.gxJWbV {
    background: #8d9494;
    height: 35px;
    width: 1px;
}
.eaBfyZ {
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 12px;
}
.mVdgp {
    -webkit-flex-grow: 1;
    -ms-flex-grow: 1;
    flex-grow: 1;
}
.khOASS {
    margin: 0 20px 12px;
    font-weight: 600;
}
.puXQi {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow-x: scroll;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    height: 152px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0 20px;
}
.cSULfV {
    background-color: #FFF;
    border-radius: 4px;
    box-shadow: 0 -1px 1px 0 rgba(0,0,0,0.02),0 1px 2px 0 rgba(0,0,0,0.16);
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    margin-right: 16px;
    margin-bottom: 16px;
    height: 148px;
    width: 296px;
}
.eRmPBV {
    padding: 20px 20px 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #f4f4f4;
    max-height: 100px;
    height: 100px;
    -webkit-align-items: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    overflow: hidden;
}
.AateO {
    border-bottom: 1px solid #e1e3e3;
}
.erxRbw {
    display: block;
    padding: 12px 20px;
    color: #4e4d4d;
    font-weight: 600;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: space-between;
    -webkit-justify-content: space-between;
    -ms-flex-pack: space-between;
    justify-content: space-between;
}
.dfSgw {
    display: block;
    padding: 12px 20px;
    color: #4e4d4d;
    font-weight: 600;
}
.hdJNiG {
    border-radius: 50%;
    height: 50%;
    width: 50%;
}
.jrdDox input {
    display: none;
}

</style>
@endsection
@section('content')
<div class="customer-profile__Container-jzJNVI hEgDuL">
   <div class="customer-profile__InnerContainer-SQrgz eEFfCV">
      <section class="customer-profile__LeftSection-dylQIp byUTZa">
         <div class="mini-profile__Container-esKiIf hkBbxs">
            <div class="mini-profile__PictureOuter-kFynmT kRxWdB">
               <div class="mini-profile__Picture-gzxCBG jrdDox">
                  <div class="mini-profile__PictureContainer-cFUFHw hYXKUb">
                     <div class="sc-ifAKCX iediMM"><span class="sc-htpNat fBJUxT">JN</span></div>
                     <div class="mini-profile__UploadButtonContainer-jrZKjp gCgasF"><button class="mini-profile__UploadButton-bGdtMz tp-button tp-button--small hfIMoI">Upload Photo</button></div>
                  </div>
                  <input type="file">
               </div>
            </div>
            <div class="mini-profile__Name-jyJHIU tp-text--center tp-heading-5 gvNWfO">{{Auth::User()->first_name}}</div>
            <div class="mini-profile__Email-gDdTgb tp-text-3--static tp-text--center tp-color--muted eKEETE">{{Auth::User()->email}}</div>
            <div class="mini-profile__Content-bjecVN bNTFIO">
               <div class="mini-profile__StatsContainer-eMgNih eaBfyZ">
                  <div class="mini-profile__StatsCount-iSsPPh tp-text--center tp-heading-5 fxQiMv">3</div>
                  <div class="mini-profile__StatsLabel-kxHPIN tp-text-3--static tp-color--muted fIsbOR">Projects</div>
               </div>
               <div class="mini-profile__Divider-jJAXAY gxJWbV"></div>
               <div class="mini-profile__StatsContainer-eMgNih eaBfyZ">
                  <div class="mini-profile__StatsCount-iSsPPh tp-text--center tp-heading-5 fxQiMv">0</div>
                  <div class="mini-profile__StatsLabel-kxHPIN tp-text-3--static tp-color--muted fIsbOR">Reviews</div>
               </div>
            </div>
         </div>
      </section>
      <section class="customer-profile__RightSection-dukBPh mVdgp">
         <div class="next-step-collection__Container-fgGayI drOGPX">
            <h1 class="next-step-collection__Heading-dGHnqW tp-heading-5 khOASS">What‘s Next</h1>
            <div class="next-step-collection__NextStepsContainer-bqjKOd puXQi">
               @php  $count = 0; @endphp  
               @foreach($serviceName as $Servicename)
               @if(!empty($Servicename[0]))
               <div class="next-step__Container-eMsKoX cSULfV">
                  <div class="next-step__Body-DhITW eRmPBV">
                    @foreach($users[$count] as $us)
                    @if(!empty($us))
                     <div class="next-step__AvatarContainer-gTNcpO fujZfg">
                        <div class="sc-ifAKCX hwpFSx"><img class="sc-bxivhb hdJNiG" src="{{URL::to('public/thumbtack_image')}}/{{$us[0]->image}}"></div>
                     </div>
                    @endif
                    @endforeach 
                    @php $count = $count + 1; @endphp
                     <div class="next-step__Titles-iOopHm fbVKAs">
                        <h1 class="next-step__Title-etmjKW tp-heading-6 gwpnRC">Pick a pro</h1>
                        <div class="next-step__Subtitle-bVSmxd tp-text-3--static igrnWF">{{$Servicename[0]->name}}</div>
                     </div>
                  </div>
                  <footer class="next-step__Footer-kSfzbc hxrIFM"><a class="next-step__Cta-crnCAL tp-heading-6 jpGIGV" href="">Message or book a pro</a></footer>
               </div>
               @endif
               @endforeach
            </div>
         </div>
         <footer>
            <ul class="footer__List-dDrTtL fKdDck">
               <li class="footer__ListItem-gGSNXm AateO">
                  <a class="footer__Link-cHnoau tp-heading-6 erxRbw" href="{{URL::to('customer/account')}}">
                     <span>Account Settings</span>
                     <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.51 0c.127 0 .254.046.353.138l7.98 7.492a.496.496 0 0 1 0 .722l-7.98 7.508a.515.515 0 0 1-.721-.015.492.492 0 0 1 .015-.706l7.596-7.149L3.157.861a.493.493 0 0 1-.015-.707A.515.515 0 0 1 3.51 0" fill="#979797" fill-rule="evenodd"></path>
                     </svg>
                  </a>
               </li>
               <li class="footer__ListItem-gGSNXm AateO">
                  <a class="footer__Link-cHnoau tp-heading-6 erxRbw" href="{{URL::to('customer/notification')}}">
                     <span>Notification Settings</span>
                     <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.51 0c.127 0 .254.046.353.138l7.98 7.492a.496.496 0 0 1 0 .722l-7.98 7.508a.515.515 0 0 1-.721-.015.492.492 0 0 1 .015-.706l7.596-7.149L3.157.861a.493.493 0 0 1-.015-.707A.515.515 0 0 1 3.51 0" fill="#979797" fill-rule="evenodd"></path>
                     </svg>
                  </a>
               </li>
            </ul>
            <ul class="footer__List-dDrTtL fKdDck">
               <li class="footer__ListItem-gGSNXm AateO"><a class="footer__Link-kuLYFg tp-heading-6 dfSgw" href="{{URL::to('logout')}}">Logout</a></li>
            </ul>
         </footer>
      </section>
   </div>
</div>


@endsection
@section('script')
<script type="text/javascript" src="{{URL::to('public/assets/customer-profile-harness-b1c06bf1.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/shared-37e64d63.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/react-b0d0d6eb.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/522561.js')}}"></script>
@endsection