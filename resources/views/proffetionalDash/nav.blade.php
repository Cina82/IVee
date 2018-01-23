
<div class="InboxTabs">
        <div class="InboxTabs-wrapper">
            <ul>

                    <li @if(collect(request()->segments())->last() == 'home')class="InboxTabs-wrapper-tab active" @else class="InboxTabs-wrapper-tab" @endif
                    >
                        <a href="{{URL::to('proffetionalDash/Requests')}}">Requests</a>
                    </li>
                    <li @if(collect(request()->segments())->last() == 'inProgress')class="InboxTabs-wrapper-tab active" @else class="InboxTabs-wrapper-tab" @endif>
                        <a href="{{URL::to('proffetionalDash/inProgress')}}">In Progress</a>
                    </li>
                    <li  @if(collect(request()->segments())->last() == 'Hired')class="InboxTabs-wrapper-tab active" @else class="InboxTabs-wrapper-tab" @endif>
                        <a href="{{URL::to('proffetionalDash/Hired')}}">Hired</a>
                    </li>
                    <li @if(collect(request()->segments())->last() == 'Sent')class="InboxTabs-wrapper-tab active" @else class="InboxTabs-wrapper-tab" @endif>
                        <a href="{{URL::to('proffetionalDash/Sent')}}">Sent</a>
                    </li>
                    <li @if(collect(request()->segments())->last() == 'Archived')class="InboxTabs-wrapper-tab active" @else class="InboxTabs-wrapper-tab" @endif>
                        <a href="{{URL::to('proffetionalDash/Archived')}}">Archived</a>
                    </li>
            </ul>
        </div>
    </div>
    