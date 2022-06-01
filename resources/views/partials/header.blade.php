{{-- <div class="page-header-inner">
    <div class="page-header-inner">
        <div class="navbar-header">
            <a href="{{ url('/') }}"
               class="navbar-brand">
                @lang('quickadmin.quickadmin_title')
            </a>
        </div>
        <a href="javascript:;"
           class="menu-toggler responsive-toggler"
           data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

            </ul>
        </div>
    </div>
</div> --}}
<style>
        .header{
        position: absolute;
        width: 100%;
        height: 60px;
        left: 0px;
        top: 0px;

        background-color: white;

        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px 10px 20px 20px;

        padding-top: 1%;

        font-family: 'poppins';
        font-weight: bold;
        
    }

    #haksara-title{
        font-size: 24px; 
        margin-left:1em; 
        color: #8E3434;

        text-decoration: none;
    }


li {
  float: left;
}

.buled{
    list-style-type: none;
  
  overflow: hidden;
  
    padding-top: 1%;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

       

        font-family: 'poppins';
        font-weight: bold;

        border-radius: 10px 10px 20px 20px!important;
        background-color: white;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


.active {
 
    color: #8E3434;
 filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
 border-radius: 200px!important;

  margin-right: 20px;
  margin-left: 10px;
  margin-top: 10px;

}

.active2 {
 
 color: white;
filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
border-radius: 200px!important;

margin-right: 8px;
margin-top: 10px;


}

#namauser{
    color: #8E3434;
    font-size: 24px;
}

.nav-kanan{
    background-color: white;
    padding-top: 1%;
    filter: drop-shadow(0px 0px 0px rgba(0, 0, 0, 0));
    transition: 0.3s;
    border-radius: 200px!important;

    margin-right: 2%;
    padding-left: 2%;
}


.nav-kanan2{
    background-color: #dc3545;
  
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    transition: 0.3s;
    border-radius: 200px!important;

    margin-right: 2%;
    padding-left: 1%;
    margin-top: 1%;

    padding-top: 2px;
    padding-bottom: 8px;
}
.nav-kanan2:hover{
    filter: drop-shadow(0px 6px 6px rgba(235, 22, 22, 0.877));
}
.nav-kanan:hover{
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
}

</style>

            {{-- <div class="header" >        
                <a href="home" id="haksara-title">
                    <img src="{{ asset('quickadmin/images/Logo.svg') }}"  width="30" height="30"  alt="">
                    Haksara
                </a>
            </div>  --}}

            <ul class="buled">
                <li class=""><a href="home" id="haksara-title">
                    <img src="{{ asset('quickadmin/images/Logo.svg') }}"  width="30" height="30"  alt="">
                    Haksara
                </a></li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <div class="nav-kanan2" style="float:right" > 
                        <li><i class=" fa fa-sign-out active2" style="font-size: 2em" aria-hidden="true"></i></li>
                    </div>
                </a> 
                <a href="/profile">
                    <div class="nav-kanan" style="float:right" > 
                        <li > <p class=""  id="namauser">{{ Auth::user()->name }}</p></li>
                        <li><i class=" fa fa-user active" style="font-size: 3em" aria-hidden="true"></i></li>
                    </div>
                </a> 
                
              </ul>
        
 
 

