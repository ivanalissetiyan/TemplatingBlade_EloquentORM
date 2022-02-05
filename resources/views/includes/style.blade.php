<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />

{{-- Style Header & Kontent --}}
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .header-3-3 .btn-no-fill,
    .header-3-3 .text-gray-1 {
        color: #8b9caf;
        transition: 0.3s;
    }

    .header-3-3 .btn-no-fill:hover,
    .header-3-3 .text-black-1 {
        color: #243142;
    }

    .header-3-3 .text-gray-2 {
        color: #aaa6a6;
    }

    .header-3-3 .btn-outline:hover {
        border: 1px solid #6da4f9;
        color: #6da4f9;
        transition: 0.3s;
    }

    .header-3-3 .card {
        box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
        transition: 0.4s;
        top: 0px;
        left: 0px;
        position: relative;
    }

    .header-3-3 .card:hover {
        box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
        top: -3px;
        left: -3px;
        position: relative;
        transition: 0.4s;
    }

    .header-3-3 .navigation .active {
        position: relative;
        padding-bottom: 3px;
        padding-top: 3px;
        transition: 0.3s;
    }

    .header-3-3 .navigation .active:before {
        content: "";
        position: absolute;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
        bottom: 0;
        height: 0px;
        width: 80%;
        /* or 100px */
        border-bottom: 2px solid #4e91f9;
    }

    .header-3-3 .btn-fill {
        border: 1px solid #4e91f9;
        background-color: #4e91f9;
        transition: 0.3s;
    }

    .header-3-3 .btn-fill:hover {
        background-color: #6da4f9;
        border: 1px solid #6da4f9;
        transition: 0.3s;
    }

    .header-3-3 .btn-outline {
        border: 1px solid #a6b1be;
        color: #a6b1be;
        transition: 0.3s;
    }

    .header-3-3 .btn-outline:hover div path {
        fill: #6da4f9;
        transition: 0.3s;
    }

    .header-3-3 .btn-outline:hover div rect {
        stroke: #6da4f9;
        transition: 0.3s;
    }

    .header-3-3 .navigation a:hover {
        color: #243142 !important;
        font-weight: 500;
        transition: 0.2s;
    }

    .header-3-3 #form {
        width: 100%;
    }

    .header-3-3 #form input[type="text"] {
        width: 100%;
        background-color: #eef4fd;
        box-sizing: border-box;
        font-size: 14px;
        padding: 0.375rem 0.5rem;
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .header-3-3 .search-icon:hover path {
        fill: #243142;
    }

    @media (max-width: 1023px) {
        .header-3-3 #form input[type="text"] {
            width: 100%;
        }
    }

    @media (min-width: 1024px) {
        .header-3-3 .center-search {
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .header-3-3 #form {
            width: 320px;
        }
    }

</style>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .content-3-5 .input {
        border: 1px solid #cacbce;
        color: #2a3240;
        transition: 0.3s;
    }

    .content-3-5 .input:focus-within {
        border: 1px solid #2ec49c;
        color: #2a3240;
        transition: 0.3s;
    }

    .content-3-5 .input input::placeholder {
        color: #cacbce;
        transition: 0.3s;
    }

    .content-3-5 .input:focus-within input::placeholder {
        color: #2a3240;
        outline: none;
        transition: 0.3s;
    }

    .content-3-5 .input:focus-within .icon path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
    }

    .content-3-5 .input .icon-toggle path {
        transition: 0.3;
        fill: #2ec49c;
        transition: 0.3s;
    }

    .content-3-5 .centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .content-3-5 .width-left {
        width: 0%;
    }

    .content-3-5 .width-right {
        width: 100%;
    }

    .content-3-5 .forgot-password {
        color: #cacbce;
        transition: 0.3s;
    }

    .content-3-5 .forgot-password:hover {
        color: #2a3240;
    }

    .content-3-5 .btn-fill {
        background-image: linear-gradient(rgba(91, 203, 173, 1),
                rgba(39, 194, 153, 1));
    }

    .content-3-5 .btn-fill:hover {
        background-image: linear-gradient(#2ec49c, #2ec49c);
    }

    .content-3-5 .bg-medium-white {
        background-color: #fcfdff;
    }

    .content-3-5 .caption {
        color: #a8adb7;
    }

    .content-3-5 .text-label {
        color: #39465b;
    }

    .content-3-5 .text-foot {
        color: #2a3240;
    }

    .content-3-5 .text-link {
        color: #2ec49c;
    }

    @media (min-width: 1024px) {
        .content-3-5 .width-left {
            width: 48%;
        }

        .content-3-5 .width-right {
            width: 52%;
        }
    }

</style>


{{-- Style Footer --}}
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .footer-2-2 .list-footer li a {
        color: #c7c7c7;
    }

    .footer-2-2 .list-footer li a:hover {
        color: #555252;
    }

    .footer-2-2 .border-color {
        color: #c7c7c7;
    }

    .footer-2-2 .footer-link:hover {
        color: #555252;
    }

    .footer-2-2 .social-media-c:hover circle,
    .footer-2-2 .social-media-p:hover path {
        fill: #555252;
    }

</style>
