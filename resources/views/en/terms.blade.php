@php
$title = 'Terms & Conditions';
$user = Auth::user();
@endphp
@include('en_includes.head')

<body>

    <!--header section start-->
    @include('en_includes.header')
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 background-img" style="background: url('{{ asset('en/img/hero-bg-2.jpg') }}')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0 text-capitalize">Terms and Conditions</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--blog section start-->
        <div class="module">
            <section class="team-single-section ptb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-8 m-auto">
                            <div class="team-single-text">
                                <div class="team-name mb-4">
                                    <h3 class="mb-1 text-capitalize text-center">For reviewers & businesses</h3>
                                    {{-- <span>Managing Director</span> --}}
                                </div>
                                {{-- <ul class="team-single-info">
                                    <li><strong>Phone:</strong><span> (+123) 123-456-789</span></li>
                                    <li><strong>Email:</strong><span> yourname@domain.com</span></li>
                                </ul> --}}
                                <div class="text-content mt-20 text-left">
                                    <p>These user terms and conditions (hereinafter referred to as the "User Terms") apply to any use of Trustmigo's website (hereinafter referred to as the "Website"), including - but not limited to - www.Trustmigo.com. <br><br>

                                        The Website is supplied by Trustmigo, Inc., a Delaware corporation situated at 245 5th Avenue, 5th floor, New York, NY 10016, USA ("Trustmigo"). In these User Terms, the words "we", "us" and "ours" refer to Trustmigo.<br><br>

                                        These User Terms are deemed to include all other operating rules, policies, and guidelines that are referred to herein or that we may otherwise publish on the Website (as such, rules, policies and guidelines may be amended from time to time), including without limitation:<br><br>

                                        Our "Guidelines for the use of the Trustmigo Services" (hereinafter referred to as the "User Guidelines"), which are located at legal.Trustmigo.com/for-reviewers/guidelines-for-reviewers
                                        Our Privacy Policy, which is located at legal.Trustmigo.com/for-reviewers/end-user-privacy-terms
                                        Our Copyright Dispute Policy, which is located at legal.Trustmigo.com/for-everyone/copyright
                                        In the event of any conflict between the terms contained herein and those of the User Guidelines, the User Guidelines will govern and control.<br><br>

                                        By using the Website, you accept to be subject to the User Terms, including the User Guidelines. If you do not accept these User Terms, you are not permitted to use the Website and are kindly requested not to use the Website any further. The registration as a user requires your express acceptance of these User Terms.<br><br>

                                        THE SERVICES ON THE WEBSITE<br>
                                        1. Registered User<br>
                                        1.1 Trustmigo grants you the non-exclusive, non-transferable, revocable, limited right to access and use the Website. In order to gain full access and use of the Website, you must create a profile and register as a user (hereinafter referred to as "Registered User").<br><br>

                                        1.2 You are only permitted to register one profile per person on the Website. The profile is personal and you must not transfer it to others.<br>

                                        1.3 In order to become a Registered User, you need a password. You choose your own password which must be used with your email address when logging onto the Website. Alternatively, we send the password to you. The password is personal and you must not transfer it or in other ways make it available to others. It is your responsibility to ensure that the password does not fall into the hands of a third party. If you become aware that the password is or may have been compromised, you are obligated to inform us hereof. We can and will change the password if there is a risk that the password has been compromised or is used in violation of the User Terms.<br><br>

                                        1.4 During the registration process, you must choose a username. The username will be shown on the Website whenever you write or comment on reviews or produce user-generated content (see 2.1 below) on the Website. Therefore, you must consider whether you wish to use a username from which you can be identified by others. The username must not (i) be offensive or in other ways insulting, (ii) contain the terms "Guest", "Admin", ".dk", ".com", etc. or (iii) contain characteristics which belong to a third party, including names of famous persons, or personal names to which you do not own the rights. You warrant that your username does not infringe on any rights (including any intellectual property rights) belonging to any third party and/or pertaining to the User Terms.<br><br>

                                        1.5 Changes to the username may only be made by us. If you want to change your username, please contact us at support@Trustmigo.com.<br><br>

                                        1.6 We are entitled at any time, without notice and without prejudice, to delete, suspend or change your profile in the event of your violation or suspected violation of these User Terms or applicable law. When deleting your profile, you will no longer have access to services on the Website which require your registration and/or login as a Registered User. When deleting your profile, we reserve the right to delete the user-generated content (see 2.1) you have made on the Website.<br><br>

                                        1.7 Furthermore, we reserve the right, at any time and without notice or explanation, to delete your profile and user-generated content (see 2.1). In this case, our disclaimer applies without limitations.<br><br>

                                        1.8 You are not permitted to gain access or attempt to gain access to the parts of the Website requiring user registration if you are not a Registered User.<br><br>

                                        2. User-Generated Content from Registered Users<br>
                                        2.1 You hereby grant us the worldwide, non-exclusive, perpetual, irrevocable, royalty-free right and license to publish, display, reproduce, modify, create derivative works of and commercially exploit any material, information, notifications, reviews, articles or other types of communication (hereinafter referred to as the "User-Generated Content" or "UGC") which you create on the Website as a Registered User. We may freely use and transfer the UGC and disclose the UGC to third parties.<br><br>

                                        2.2 Registered Users are liable for the UGC they publish on the Website.<br><br>

                                        2.3 Registered Users warrant that all UGC posted on the Website is correct and true (where they state facts) or genuinely held (where they state opinions).<br><br>

                                        2.4 UGC must relate to a company or organization from which the Registered User has purchased or can otherwise document using the company's or organization's products or services.<br><br>

                                        2.5 You may not publish UGC regarding companies to which you have personal or professional relations.<br>

                                        2.6 Registered Users must not, and must not allow any third party to, publish UGC on the website which:<br><br>

                                        is of a marketing nature or has marketing purposes,<br>
                                        is unlawful, deceptive, misleading, fraudulent, threatening, abusive, harassing, libelous, defamatory, tortious, obscene, pornographic or profane, has sexist, political or racial character, violates other people's rights, including any intellectual property rights, rights of privacy and/or rights of publicity,<br>
                                        is offensive or in any way breaches any applicable local, national or international law or regulation,
                                        violates these User Terms, including the User Guidelines, reveals any personal information about another individual, including another person's name, address, phone number, email address, credit card information or any other information that could be used to track, contact or impersonate that person,<br>
                                        has a disloyal or unlawful purpose and/or content (or promotes unlawful purposes), or
                                        is technically harmful (including without limitation computer viruses, logic bombs, Trojan horses, worms, harmful components, corrupted data or other malicious software, harmful data or conduct).
                                        2.7 Contributors of UGC warrant in every context that the UGC is lawful and in compliance with the User Terms. If Trustmigo receives notice or otherwise becomes aware that UGC violates current legislation and/or the User Terms, we may delete the UGC without any notice, and we - dependent on the character of the violation - may inform the violated party and/or the authorities of the violation. Our right to delete will not be conditioned on an explanation, although we will strive to inform the Registered User about the deletion and the reason hereof.<br><br>

                                        2.8 The Registered User hereby grants us the right to initiate and take any legal actions which we deem necessary in case of infringement of the Registered User's UGC.<br><br>

                                        The Registered User must guarantee to indemnify us for any claims which may be made against us as a consequence of the Registered User's violation of the User Terms or current legislation. The Registered User must indemnify and hold us harmless from and against any claim or loss due to third party claims against us resulting from the UGC of the Registered User.<br><br>

                                        2.9 We may at any time request information about the UGC from the Registered User, including documentation supporting the information included in the UGC, e.g. documentation evidencing that the UGC is based on an actual buying experience in an actual customer relation to the company to which the UGC relates.  <br><br>

                                        GENERAL TERMS<br>
                                        3. Rights<br>
                                        3.1 The Website and the services we offer via the Website, including all underlying technology and intellectual property rights embodied therein, are and remain our sole and exclusive property, and no license or any other right is granted to any such underlying technology. If you provide feedback, ideas or suggestions regarding the Website or the services offered on the Website ("Feedback"), we are free to fully exploit such Feedback.<br><br>

                                        3.2 The content on the Website, including but not limited to the intellectual property rights, text, characteristics, graphics, icons, photos, calculations, references and software is or will be our property or the property of a third party (other than the Registered User) and is protected by U.S. and applicable international legislation, including without limitation applicable copyright and trademark laws.<br>

                                        3.3 Unauthorized copying, distribution, presentation or other use of the Website or part hereof is a violation of U.S. law and may thus result in civil and/or criminal penalties.<br><br>

                                        3.4 To the fullest extent permitted by law, the rights to free use of the UGC are transferred to us irrevocably, without any time limitation and without territorial limitations, by submitting the UGC to us.<br><br>

                                        3.5 Downloading and other digital copying of the content on the Website or parts hereof are only permitted for personal non-commercial use unless otherwise agreed with us in writing or allowed under applicable mandatory law.<br><br>

                                        3.6 All company names, trademarks and other business characteristics on the Website is or will be our property or the property of a third party (other than the Registered User) and must only be used for business purposes upon prior approval from us or the third party owner, respectively.<br><br>

                                        4. Personal data<br>
                                        4.1 We perform different types of processing of personal data in connection with the use of the Website. Our processing of personal data takes place under observance of our Privacy Policy, which can be obtained here: legal.Trustmigo.com/for-reviewers/end-user-privacy-terms.<br><br>

                                        By accepting these User Terms, you confirm to have read and accepted our Privacy Policy.<br><br>

                                        5. Disclaimers<br>
                                        5.1 THE WEBSITE, CONTENT AND SERVICES OFFERED ON THE WEBSITE ARE PROVIDED 'AS IS' AND AS AVAILABLE WITHOUT REPRESENTATIONS OR WARRANTIES OF ANY KIND. Trustmigo EXPRESSLY DISCLAIMS ANY AND ALL WARRANTIES, EXPRESS, IMPLIED OR STATUTORY, INCLUDING WITHOUT LIMITATION ANY WARRANTIES OF NON-INFRINGEMENT, MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. THE WEBSITE AND SERVICES MAY BE MODIFIED, UPDATED, INTERRUPTED, SUSPENDED OR DISCONTINUED AT ANY TIME WITHOUT NOTICE OR LIABILITY.<br><br>

                                        5.2 We make no representations or warranties with respect to any UGC published on the Website. Notwithstanding the foregoing, Trustmigo may at all times investigate and edit (including anonymizing) UGC, e.g. if such actions are (i) prompted by third party requests, (ii) required under applicable law or (iii) necessary for the UGC's compliance with our User Guidelines.<br><br>

                                        5.3 We disclaim all liability for the content of UGC. Our non-liability applies, without limitation, to any UGC, including UGC which has been edited by us (see 5.2). We are not liable for any links to third party websites in the UGC, including for the content of the page to which the UGC links.<br><br>

                                        5.4 Recommendations, reviews, comments, etc. of specific companies, services, e-businesses, etc. on the Website are provided by Registered Users and are not endorsements made by us. We disclaim all liability for the content of the Website. The use of our services is in any respect the sole responsibility of the Registered Users. We cannot be held liable for the availability of the Website.
                                        <br><br>
                                        6. Limitation of liability<br>
                                        6.1 WE SHALL IN NO CASE BE HELD LIABLE, WHETHER IN CONTRACT, TORT (INCLUDING NEGLIGENCE) OR OTHERWISE FOR DAMAGES FOR THE USE OF THE WEBSITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, INCLUDING (I) LOSS OF PROFITS, CONTRACTS, TURNOVER, BUSINESS, BUSINESS OPPORTUNITY, LOSS OR CORRUPTION OF DATA OR RECOVERY OF DATA, GOODWILL, SECURITY BREACH RESULTING FROM A FAILURE OF THIRD PARTY TELECOMMUNICATIONS AND/OR THE INTERNET, ANTICIPATED SAVINGS OR REVENUE (REGARDLESS OF WHETHER ANY OF THESE ARE DIRECT, INDIRECT OR CONSEQUENTIAL) (II) ANY LOSS OR DAMAGE ARISING IN CONNECTION WITH LIABILITIES TO THIRD PARTIES (WHETHER DIRECT, INDIRECT OR CONSEQUENTIAL) OR (III) ANY INDIRECT, SPECIAL, PUNITIVE, INCIDENTAL OR CONSEQUENTIAL LOSS OR DAMAGE WHATSOEVER. SOME STATES AND OTHER JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATIONS AND EXCLUSIONS MAY NOT APPLY TO YOU.<br><br>

                                        6.2 OUR TOTAL AGGREGATE LIABILITY, INCLUDING WITHOUT LIMITATION LIABILITY FOR BREACH OF CONTRACT, MISREPRESENTATION (WHETHER TORTIOUS OR STATUTORY), TORT (INCLUDING NEGLIGENCE), BREACH OF STATUTORY DUTY OR OTHERWISE, ARISING FROM OR IN CONNECTION WITH THE USER TERMS, THE WEBSITE OR OUR SERVICES WILL NEVER FOR ANY AND ALL ACTIONABLE CIRCUMSTANCES EXCEED ONE HUNDRED DOLLARS ($100.00). YOU FURTHER AGREE THAT NO CLAIMS OR ACTIONS ARISING OUT OF, OR RELATED TO, THE USE OF OUR WEBSITE OR SERVICES OR THESE USER TERMS MAY BE BROUGHT BY YOU MORE THAN ONE (1) YEAR AFTER THE ACTIONABLE EVENT. NOTHING IN THE USER TERMS EXCLUDES OR LIMITS EITHER PARTY'S LIABILITY FOR MATTERS WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.<br><br>

                                        7. Other User Terms<br>
                                        7.1 We may at any time, in our sole discretion, revise or change these User Terms. We will make an effort to provide reasonable advance notice of any such changes. We may at any time, in our own discretion and without notice, close, change or reorganize the Website. As a Registered User you accept to be covered by the at all times current User Terms. Any revision or change of the User Terms will be stated on the Website. We will furthermore strive to inform the Registered Users about the change of the User Terms. The Registered Users agree that the continued use of the Website after any posted modified version of the User Terms is an acceptance of the modified User Terms.<br><br>

                                        7.2 Should any of these User Terms be regarded as unlawful or without effect and therefore not to be enforced, this will not have any effect on the applicability and enforcement of the remaining part of the User Terms.<br><br>

                                        8. Term and termination<br>
                                        8.1 We may terminate your right to access and use the services offered on the Website at any time for any reason without liability. If we do so, or if you elect to delete your profile, any rights granted to you herein will immediately cease. Sections 2-10 will survive any termination of the User Terms.
                                        <br><br>
                                        9. Applicable law and venue<br>
                                        9.1 The User Terms and the relationship between you and Trustmigo are governed by the laws of the State of New York, without regard to the conflicts of law provisions thereof. Any disputes must be brought exclusively in the state or federal courts located in New York, and the parties hereby consent to the jurisdiction of such courts.<br><br>

                                        10. Copyright dispute policy<br>
                                        10.1 It is Trustmigo's policy to (i) block access to or remove material that it believes in good faith to be copyrighted material that has been illegally copied and distributed by any of our advertisers, affiliates, content providers or members or users; and (ii) remove and discontinue service to repeat offenders. Trustmigo has adopted a policy toward copyright infringement in accordance with the Digital Millennium Copyright Act or DMCA (posted at http://www.copyright.gov/legislation/dmca.pdf). This policy is available at legal.Trustmigo.com/for-everyone/copyright and contains instructions for contacting Trustmigo's Designated Agent to Receive Notification of Claimed Infringement ("Designated Agent").<br><br>

                                        11. Miscellaneous<br>
                                        11.1 You acknowledge and agree that these User Terms constitute the complete and exclusive agreement between you and Trustmigo concerning your use of the Website and supersede and govern all prior proposals, agreements or other communications.<br>

                                        11.2 Nothing contained in these User Terms can be construed as creating any agency, partnership or other form of joint enterprise between us. Our failure to require your performance of any provision hereof will not affect our full right to require such performance at any time thereafter, nor may our waiver of a breach of any provision hereof be taken or held to be a waiver of the provision itself. You may not assign any rights granted to you hereunder, and any such attempts are void.<br><br>

                                        12. Contact<br>
                                        12.1 You may contact Trustmigo via email at support@Trustmigo.com or the following mailing address:
                                        <br><br>
                                        Trustmigo, Inc.,<br>
                                        5th Avenue, 5th floor,<br>
                                        New York, NY 10016, USA</p>
                                </div>
                                {{-- <ul class="team-social-list list-inline mt-4">
                                    <li class="list-inline-item"><a href="#" class="color-primary"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="color-primary"><span class="ti-instagram"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="color-primary"><span class="ti-dribbble"></span></a></li>
                                    <li class="list-inline-item"><a href="#" class="color-primary"><span class="ti-linkedin"></span></a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--blog section end-->

    </div>
    <!--body content wrap end-->
    <!--footer section start-->
    @include('en_includes.footer')
    <!--footer section end-->
    @include('en_includes.scripts')
