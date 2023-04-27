@extends('layout')

@section('content')
<div class="contact">
    <div class="contact__title">
        <h3>THE ULTIMATE LUXURY</h3>

        <h1>New Details</h1>

        <div class="contact__box">
            <h4>Home<strong> | </strong><span>Blog</span></h4>
        </div>
    </div>

    <div class="contact__info">
        <div class="contact info-01">
            <img src="src/img/icons/msg.svg" alt="msg">

            <div>
                <h5>Hotel Address</h5>
                <p>19/A, Cirikon City hall Tower New York, NYC</p>
            </div>
        </div>

        <div class="contact info-02">
            <img src="src/img/icons/phone.svg" alt="phone">

            <div>
                <h5>Phone Number</h5>
                <p>+ 97656 8675 7864 7</p>
                <p>+ 876 766 8675 765 6</p>
            </div>
        </div>

        <div class="contact info-03">
            <img src="src/img/icons/location.svg" alt="location">

            <div>
                <h5>Email</h5>
                <p>info@webmail.com</p>
                <p>jobs.webmail@mail.com</p>
            </div>
        </div>

    </div>

    <div class="contact__img">
        <img src="src/img/home/maps.png" alt="maps">
    </div>

    <div class="contact__form">
        <form class="form" action="#">
            <div>            
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.9735 7.166C10.6095 6.4575 11 5.5245 11 4.5C11 2.2945 9.2055 0.5 7 0.5C4.7945 0.5 3 2.2945 3 4.5C3 6.7055 4.7945 8.5 7 8.5C7.7775 8.5 8.5015 8.2735 9.1165 7.888C11.2915 8.7075 12.789 10.698 12.9795 13H1.021C1.1505 11.4505 1.8775 10.0055 3.06 8.9745C3.2685 8.793 3.29 8.4775 3.1085 8.269C2.9275 8.061 2.6115 8.039 2.403 8.2205C0.8755 9.5515 0 11.4755 0 13.5C0 13.7765 0.224 14 0.5 14H13.5C13.7765 14 14 13.7765 14 13.5C14 10.757 12.41 8.3075 9.9735 7.166ZM4 4.5C4 2.8455 5.3455 1.5 7 1.5C8.6545 1.5 10 2.8455 10 4.5C10 6.1545 8.6545 7.5 7 7.5C5.3455 7.5 4 6.1545 4 4.5Z" fill="#BEAD8E"/>
                </svg>
                <input type="text" placeholder="Your full name" />
            </div>

            <div>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.0751 11.8376C14.8269 11.4325 14.4417 10.9608 13.9891 10.5089C13.6616 10.1813 12.5372 9.11343 11.8143 9.11343C11.5823 9.11343 11.4351 9.21259 11.3527 9.29492L10.39 10.2571C10.3738 10.2733 10.3221 10.2919 10.2289 10.2919C9.69467 10.2919 8.56186 9.70057 7.43025 8.56956C5.92123 7.05995 5.55825 5.79432 5.74275 5.60983L6.70429 4.64769C6.78722 4.56475 6.88638 4.41752 6.88638 4.18615C6.88698 3.46259 5.81847 2.33819 5.49095 2.01067C5.16402 1.68314 4.04022 0.615234 3.31607 0.615234C3.0847 0.615234 2.93746 0.713792 2.85453 0.796725L0.929648 2.7216C0.361138 3.28951 0.56847 4.40069 1.54623 6.02389C2.39479 7.43254 3.73794 9.08398 5.32688 10.6729C8.14539 13.4914 10.9994 15.3851 12.4284 15.3845C12.7842 15.3845 13.0697 15.2787 13.2782 15.0702L15.2031 13.1453C15.6196 12.7288 15.2097 12.0581 15.0751 11.8376ZM12.6256 14.4175C12.6039 14.4386 12.5414 14.4614 12.4284 14.4614C11.4555 14.4614 8.86474 12.9049 5.97953 10.0203C4.44167 8.48242 3.1484 6.89408 2.3371 5.54733C1.42304 4.0305 1.50897 3.44757 1.58229 3.37425L3.39419 1.56235C3.63037 1.6537 4.17784 2.00225 4.8383 2.66331C5.49876 3.32437 5.84792 3.87124 5.93926 4.10742L5.0901 4.95718C4.20489 5.8424 5.34431 7.78831 6.7776 9.22221C8.00717 10.4518 9.32989 11.215 10.2289 11.215C10.649 11.215 10.9032 11.0491 11.0426 10.9097L11.8924 10.0605C12.1286 10.1519 12.6754 10.5011 13.3365 11.1615C13.997 11.822 14.3461 12.3694 14.4375 12.6056L12.6256 14.4175Z" fill="#BEAD8E"/>
                </svg>
                <input type="text" placeholder="Add phone number"/>
            </div>

            <div>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_57_7521)">
                    <path d="M14.5912 3.9788C14.5618 3.93931 14.5248 3.90601 14.4825 3.8808C14.4402 3.85559 14.3933 3.83898 14.3445 3.83189C14.2958 3.82481 14.2461 3.82741 14.1983 3.83953C14.1506 3.85166 14.1057 3.87307 14.0662 3.90255L8.01748 8.41755C7.99584 8.43378 7.96952 8.44255 7.94248 8.44255C7.91543 8.44255 7.88911 8.43378 7.86748 8.41755L1.93747 3.88255C1.89832 3.85268 1.85367 3.8308 1.80607 3.81818C1.75847 3.80557 1.70884 3.80245 1.66003 3.809C1.61123 3.81556 1.56419 3.83167 1.5216 3.85641C1.47902 3.88114 1.44172 3.91403 1.41185 3.95318C1.38197 3.99233 1.3601 4.03698 1.34748 4.08458C1.33486 4.13218 1.33174 4.18181 1.3383 4.23062C1.34486 4.27943 1.36097 4.32646 1.3857 4.36905C1.41044 4.41163 1.44332 4.44893 1.48247 4.4788L6.14497 8.04505L1.53372 11.52C1.494 11.5497 1.4605 11.5868 1.43514 11.6294C1.40977 11.672 1.39305 11.7191 1.38591 11.7682C1.37877 11.8172 1.38136 11.8672 1.39353 11.9152C1.4057 11.9633 1.42722 12.0084 1.45685 12.0482C1.48648 12.0879 1.52364 12.1214 1.56622 12.1468C1.60879 12.1721 1.65595 12.1889 1.70499 12.196C1.75403 12.2031 1.804 12.2005 1.85204 12.1884C1.90008 12.1762 1.94525 12.1547 1.98497 12.125L6.76373 8.51755L7.41123 9.01755C7.5622 9.13312 7.74672 9.19636 7.93684 9.19772C8.12697 9.19907 8.31237 9.13846 8.46498 9.02505L9.14498 8.51755L13.98 12.125C14.0195 12.1545 14.0644 12.1759 14.1121 12.188C14.1599 12.2001 14.2095 12.2027 14.2583 12.1957C14.307 12.1886 14.3539 12.172 14.3962 12.1468C14.4386 12.1216 14.4755 12.0883 14.505 12.0488C14.5344 12.0093 14.5558 11.9644 14.568 11.9167C14.5801 11.8689 14.5827 11.8193 14.5756 11.7705C14.5685 11.7218 14.5519 11.6749 14.5267 11.6325C14.5015 11.5902 14.4682 11.5533 14.4287 11.5238L9.77123 8.0438L14.515 4.50005C14.5937 4.44064 14.6458 4.35263 14.66 4.25507C14.6743 4.15752 14.6496 4.05826 14.5912 3.9788Z" fill="#BEAD8E"/>
                    <path d="M14.125 2.375H1.875C1.37772 2.375 0.900806 2.57254 0.549175 2.92417C0.197544 3.27581 0 3.75272 0 4.25L0 11.75C0 12.2473 0.197544 12.7242 0.549175 13.0758C0.900806 13.4275 1.37772 13.625 1.875 13.625H14.125C14.6223 13.625 15.0992 13.4275 15.4508 13.0758C15.8025 12.7242 16 12.2473 16 11.75V4.25C16 3.75272 15.8025 3.27581 15.4508 2.92417C15.0992 2.57254 14.6223 2.375 14.125 2.375ZM15.25 11.75C15.25 12.0484 15.1315 12.3345 14.9205 12.5455C14.7095 12.7565 14.4234 12.875 14.125 12.875H1.875C1.57663 12.875 1.29048 12.7565 1.0795 12.5455C0.868526 12.3345 0.75 12.0484 0.75 11.75V4.25C0.75 3.95163 0.868526 3.66548 1.0795 3.4545C1.29048 3.24353 1.57663 3.125 1.875 3.125H14.125C14.4234 3.125 14.7095 3.24353 14.9205 3.4545C15.1315 3.66548 15.25 3.95163 15.25 4.25V11.75Z" fill="#BEAD8E"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_57_7521">
                    <rect width="16" height="16" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <input type="text" placeholder="Enter email address"/>
            </div>

            <div>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.75 14.25C2.47384 14.25 2.25 14.0261 2.25 13.75V2.0625C2.25 0.925219 3.17522 0 4.3125 0H13.25C13.5262 0 13.75 0.223875 13.75 0.5V12C13.75 12.2761 13.5262 12.5 13.25 12.5C12.9738 12.5 12.75 12.2761 12.75 12V1H4.3125C3.72662 1 3.25 1.47662 3.25 2.0625V13.75C3.25 14.0261 3.02616 14.25 2.75 14.25Z" fill="#BEAD8E"/>
                    <path d="M13.25 16H4.5C3.25934 16 2.25 14.9907 2.25 13.75C2.25 12.5093 3.25934 11.5 4.5 11.5H13.25C13.5262 11.5 13.75 11.7239 13.75 12C13.75 12.2761 13.5262 12.5 13.25 12.5H4.5C3.81075 12.5 3.25 13.0608 3.25 13.75C3.25 14.4392 3.81075 15 4.5 15H13.25C13.5262 15 13.75 15.2239 13.75 15.5C13.75 15.7761 13.5262 16 13.25 16Z" fill="#BEAD8E"/>
                    <path d="M13.25 14.25H4.5C4.22384 14.25 4 14.0261 4 13.75C4 13.4739 4.22384 13.25 4.5 13.25H13.25C13.5262 13.25 13.75 13.4739 13.75 13.75C13.75 14.0261 13.5262 14.25 13.25 14.25Z" fill="#BEAD8E"/>
                    <path d="M5 12.5C4.72384 12.5 4.5 12.2761 4.5 12V0.5C4.5 0.223875 4.72384 0 5 0C5.27616 0 5.5 0.223875 5.5 0.5V12C5.5 12.2761 5.27616 12.5 5 12.5Z" fill="#BEAD8E"/>
                </svg>
                <input type="text" placeholder="Enter subject"/>
            </div>


            <div>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.546 2.88058L13.1196 0.454198C12.8267 0.161288 12.4373 0 12.0231 0C11.6089 0 11.2195 0.161288 10.9266 0.454188L0.769599 10.611C0.673192 10.7075 0.611047 10.8328 0.592727 10.9679L0.00566508 15.2929C-0.0205025 15.4858 0.0449164 15.6798 0.182565 15.8174C0.300224 15.9351 0.459079 16 0.623225 16C0.651071 16 0.679097 15.9981 0.707095 15.9943L5.03208 15.4073C5.1672 15.3889 5.29257 15.3268 5.38898 15.2304L15.546 5.07357C15.8389 4.78069 16.0001 4.39127 16.0001 3.97709C16.0001 3.56287 15.8388 3.17346 15.546 2.88058ZM4.65618 14.2004L1.35098 14.649L1.79962 11.3438L8.99714 4.14641L11.8537 7.00296L4.65618 14.2004ZM14.6645 4.19214L12.7351 6.12153L9.87855 3.265L11.808 1.33561C11.8855 1.25809 11.976 1.24651 12.0231 1.24651C12.0701 1.24651 12.1606 1.25809 12.2382 1.33561L14.6646 3.76199C14.7421 3.83951 14.7536 3.93002 14.7536 3.97706C14.7536 4.0241 14.7421 4.11462 14.6645 4.19214Z" fill="#BEAD8E"/>
                </svg>
                <textarea placeholder="Enter message"></textarea>
            </div>



            <button>SEND</button>
        </form>
    </div>

</div>
@endsection