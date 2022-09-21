<style type="text/css">
*{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
    font-family: 'Lato' ;
    }
html{
    scroll-behavior:smooth;
}
body{width: 100%;}

    .nav_style{
        background-color: #a25cbe !important;
    }
    .nav_style a{
        color: white;
    }

    .main_header{
        height: 450px;
        width: 100%;
    }
    .rightside h1{
font-size:3rem;
    }
    .c_rotate img{
        animation: gocorona 3s linear infinite;
    }
    @keyframes gocorona{
        /* 0%{
            transform: rotate(0);
        }
        100%{
            transform: rotate(360deg);
        } */
        0%{
            transform: scale(0.75);
        }
        20%{
            transform:scale(1);
        }
        40%{
            transform: scale(0.75);
        }
        60%{
            transform: scale(1);
        }
        80%{
            transform:scale(0.75);
        }
        100%{
            transform:scale(1);
        }
    }
    .leftside img{      
animation: demo 5s linear infinite;
    }
    @keyframes demo {
        /*  */
        0%{
            transform: rotate(0);
        }
        100%{
            transform: rotate(360deg);
        }
    }
.corona_update
{
    margin: 0 0 30px 0;
}
.corona_update h3{
    color: #ff2c06;
}
.corona_update h1{
    text-align: center;
    font-size: 1.4rem;
}
.sub_section{
    background-color: #fbfafd;
}
.footer-style{
    background-color: #a25cbe !important ;
}
.footer-style p{
margin-bottom: 0 !important;
padding:10px;
}
#mybtn{
    display: none;
    position: fixed;
    bottom: 42px;
    right: 15px;
    z-index: 99;
    border: none;
    outline:none;
    background-color:black;
    color:white;
    padding: 11px;
    border-radius:18px;
}
#mybtn:hover{
    background: #606060;
}

@media(max-width:768px){
    .main_header{
        height: 500px;
        text-align: center;
    }
    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size:30px;
        padding-left: 25px;
    }
    .updates_area{
        flex-direction:column;
        font-size: 15px;
    }
    .section_header h1{
        font-size: 25px;
    }
}


</style>