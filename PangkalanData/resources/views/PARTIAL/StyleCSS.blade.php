@auth
    @if (Auth::user()->level == 'operator')
        <style>
            nav {
                background: #00587a;
                max-height: 70px;
            }
            nav ul li {
                float: left;
                display: inline-block;
                background: #00587a;
                margin: 0 5px;
            }
            .footer {
                width: 100%;
                padding: 10px 0 10px 0;
                height: 100px;
                text-align: center;
                position: absolute;
                left: 0;
                background-color: #00587a;
            }
        </style>
    @elseif (Auth::user()->level == 'validator')
        <style>
            nav {
                background: #028b40;
                max-height: 70px;
            }
            nav ul li {
                float: left;
                display: inline-block;
                background: #028b40;
                margin: 0 5px;
            }
            .footer {
                width: 100%;
                padding: 10px 0 10px 0;
                height: 100px;
                text-align: center;
                position: absolute;
                /* bottom: 0; */
                left: 0;
                background-color: #028b40;
            }
        </style>                
    @elseif (Auth::user()->level == 'tamu')
        <style>
            nav {
                background: #005fec;
                max-height: 70px;
            }
            nav ul li {
                float: left;
                display: inline-block;
                background: #005fec;
                margin: 0 5px;
            }
            .footer {
                width: 100%;
                padding: 10px 0 10px 0;
                height: 100px;
                text-align: center;
                position: absolute;
                /* bottom: 0; */
                left: 0;
                background-color: #005fec;
            }
        </style>        
    @elseif (Auth::user()->level == 'admin')
    <style>
        nav {
            background: #d64400;
            max-height: 70px;
        }
        nav ul li {
            float: left;
            display: inline-block;
            background: #d64400;
            margin: 0 5px;
        }
        .footer {
            width: 100%;
            padding: 10px 0 10px 0;
            height: 100px;
            text-align: center;
            position: absolute;
            /* bottom: 0; */
            left: 0;
            background-color: #d64400;
        }
    </style>          
    @endif
@endauth