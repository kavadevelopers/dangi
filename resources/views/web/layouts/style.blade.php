<style>
    .table-cus th{
        color:#00030a;
        font-weight: 800;
    }
    .table-cus td{
        color:#00030a;
    }
    p{
        font-size: 1.5rem;
    }
    .row-item > [class*='col-'] {
        display: flex;
    }
    .ol-number{
        list-style: numbers;
    }
    .ol-number li{
        display: list-item;
    }
    .it-data-section {
        padding: 130px 0;
        overflow: hidden;
    }
    .font-weight-600 {
        font-weight: 600!important;
    }
    .feature-box * {
        transition-duration: .4s;
        -webkit-transition-duration: .4s;
        -moz-transition-duration: .4s;
        -ms-transition-duration: .4s;
    }
    .feature-box .feature-box-content {
        max-width: 100%;
    }
    .feature-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        text-align: center;
        z-index: 1;
        position: relative;
        transition-duration: .4s;
        -webkit-transition-duration: .4s;
        -moz-transition-duration: .4s;
        -ms-transition-duration: .4s;
    }
    .padding-4-rem-all {
        padding: 4rem;
    }
    .bg-white {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-white-rgb),var(--bs-bg-opacity))!important;
    }
    .bg-white {
        background-color: #fff;
    }
    .box-shadow-large, .box-shadow-large-hover:hover {
        box-shadow: 0 0 30px rgba(0,0,0,.08);
        transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
    }
    .feature-box.text-start {
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }
    .margin-5-rem-bottom {
        margin-bottom: 5rem;
    }
    .margin-10px-bottom {
        margin-bottom: 10px;
    }
    .bg-light-gray {
        background-color: #f7f7f7;
    }

    .how-we-operate .timeline {
        position: relative;
        margin: -40px auto;
        padding: 40px 0;
        width: 1000px;
        box-sizing: border-box;
    }

    .how-we-operate .timeline:before {
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: #c5c5c5;
    }

    .how-we-operate .timeline ul {
        padding: 0;
        margin: 0;
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .how-we-operate .timeline ul li {
        list-style: none;
        position: relative;
        width: 50%;
        padding: 20px 40px;
        box-sizing: border-box;
    }

    .how-we-operate .timeline ul li:nth-child(odd) {
        float: left;
        text-align: right;
        clear: both;
    }

    .how-we-operate .timeline ul li:nth-child(even) {
        float: right;
        text-align: left;
        clear: both;
    }

    .how-we-operate .content {
        padding-bottom: 20px;
    }

    .how-we-operate .timeline ul li:nth-child(odd):before {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        top: 24px;
        right: -6px;
        background: #ffcb19;
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(233, 33, 99, 0.2);
    }

    .how-we-operate .timeline ul li:nth-child(even):before {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        top: 24px;
        left: -4px;
        background: #ffcb19;
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(233, 33, 99, 0.2);
    }

    .how-we-operate .timeline ul li h3 {
        padding: 0;
        margin: 0;
        color: #ffcb19;
        font-weight: 600;
    }

    .how-we-operate .timeline ul li p {
        margin: 10px 0 0;
        padding: 0;
    }

    .how-we-operate .timeline ul li .time h4 {
        margin: 0;
        padding: 0;
        font-size: 14px;
    }

    .how-we-operate .timeline ul li:nth-child(odd) .time {
        position: absolute;
        top: 12px;
        right: -70px;
        margin: 0;
        padding: 8px 16px;
        background: #ffcb19;
        color: #fff;
        border-radius: 18px;
        box-shadow: 0 0 0 3px #cda214;
    }

    .how-we-operate .timeline ul li:nth-child(even) .time {
        position: absolute;
        top: 12px;
        left: -70px;
        margin: 0;
        padding: 8px 16px;
        background: #ffcb19;
        color: #fff;
        border-radius: 18px;
        box-shadow: 0 0 0 3px #cda214;
    }

    @media(max-width:1000px) {
        .how-we-operate .timeline {
            width: 100%;
        }
    }

    @media(max-width:767px) {
        .how-we-operate .timeline {
            width: 100%;
            padding-bottom: 0;
        }

        .how-we-operate h1 {
            font-size: 40px;
            text-align: center;
        }

        .how-we-operate .timeline:before {
            left: 20px;
            height: 100%;
        }

        .how-we-operate .timeline ul li:nth-child(odd),
        .how-we-operate .timeline ul li:nth-child(even) {
            width: 100%;
            text-align: left;
            padding-left: 50px;
            padding-bottom: 50px;
        }

        .how-we-operate .timeline ul li:nth-child(odd):before,
        .how-we-operate .timeline ul li:nth-child(even):before {
            top: -18px;
            left: 16px;
        }

        .how-we-operate .timeline ul li:nth-child(odd) .time,
        .how-we-operate .timeline ul li:nth-child(even) .time {
            top: -30px;
            left: 50px;
            right: inherit;
        }
    }


    ul,ol{
        padding-left: 20px;
    }
    p{
        text-align: justify !important;
    }
    .-req{
		color: red;
		font-weight: bold;
	}
    .form-control{
        border-radius: 5px;
        background: rgb(249, 250, 250);
        border: 1px solid rgb(181, 189, 196);
        font-size: 16px;
        line-height: 24px;
        padding: 7px 8px;
        color: rgb(8, 9, 10);
        box-shadow: none;
    }
    .form-control:focus{
        background-color: #fff;
        border-color: #ffcb19;
        box-shadow: 1px 1px 0 #ffcb19;
    }
</style>