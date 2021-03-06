@inject('request', 'Illuminate\Http\Request')

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
        <!-- User -->
            {{-- <li>
                <div class="row" style=" padding-top: 2em;margin-left: 0.05rem">
                    <div class="col-md-2">
                    <i class="fa fa-user" aria-hidden="true" style="font-size: 3em; color:white"></i>
                    </div>
                    
               <div class="col-md-5">
               <p  style="color:white;">Selamat Datang  {{ Auth::user()->name }} !</p>
               </div>
               <div class="col-md-5">
                   <a>
           <a href="/profile"><button type="button" class='btn btn-sm btn-primary' style="border-radius: 10%;">Profile</button></a>
                   </a>
               </div>
                </div>
            </li> --}}

            <!-- end of user -->
{{-- 
            <li class="{{ $request->segment(1) == 'tests' ? 'active' : '' }}">
                <a href="{{ route('tests.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.test.new')</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'results' ? 'active' : '' }}">
                <a href="{{ route('results.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.results.title')</span>
                </a>
            </li> --}}

            @if(Auth::user()->isAdmin())
            <li class="{{ $request->segment(1) == 'questions' ? 'active' : '' }}">
                <a href="{{ route('questions.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Kelola Pertanyaan')</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'questions_options' ? 'active' : '' }}">
                <a href="{{ route('questions_options.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('Kelola Jawaban')</span>
                </a>
            </li>
            <li>
                {{-- <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="fa arrow"></span>
                </a> --}}
                    {{-- <li class="{{ $request->segment(1) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li> --}}
                    
                    {{-- <li class="{{ $request->segment(1) == 'user_actions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span class="title">
                                @lang('quickadmin.user-actions.title')
                            </span>
                        </a>
                    </li> --}}
            </li>
            @endif
            {{-- <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.logout')</span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
{{-- {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!} --}}
