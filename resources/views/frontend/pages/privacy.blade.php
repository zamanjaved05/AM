@extends('frontend.layouts.master')

@section('main-content')
<section class="ml-5"> 
 <div class="page-content">
                                                                <p class="mb-2 mt-2"><strong >What information do we collect?</strong></p>
                                                                <p>We collect information from you when you register on our site, place an order, subscribe to our newsletter or email.</p>
                                                                <p>When ordering or registering on our site, as appropriate, you may be asked to enter your: name, e-mail address, mailing address or phone number.</p>
                                                                <p class="mb-2 mt-2"><strong>What do we use your information for?</strong></p>
                                                                <p>Any of the information we collect from you may be used in one of the following ways:</p>
                                                                <p class="mb-2 mt-2"><em><strong>To process transactions</strong></em></p>
                                                                <p>Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express
                                                                    purpose of delivering the purchased product or service requested.</p>
                                                                <p class="mb-2 mt-2"><em><strong>To send periodic emails</strong></em></p>
                                                                <p>The email address you provide may be used to send you information, respond to inquiries, and/or other requests or questions.</p>
                                                                <p class="mb-2 mt-2"><strong>How do we protect your information?</strong></p>
                                                                <p>We implement a variety of security measures to maintain the safety of your personal information when you place an order</p>
                                                                <p class="mb-2 mt-2"><strong>Do we disclose any information to outside parties?</strong></p>
                                                                <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website,
                                                                    conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate
                                                                    to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other
                                                                    parties for marketing, advertising, or other uses.</p>
                                                                <p class="mb-2 mt-2"><strong>Third party links</strong></p>
                                                                <p>Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We therefore
                                                                    have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these
                                                                    sites.</p>
                                                                <p class="mb-2 mt-2"><strong>Online Privacy Policy Only</strong></p>
                                                                <p>This online privacy policy applies only to information collected through our website and not to information collected offline.</p>
                                                                <p class="mb-2 mt-2"><strong>Your Consent</strong></p>
                                                                <p>By using our site, you consent to our online privacy policy.</p>
                                                                <p class="mb-2 mt-2"><strong>Changes to our Privacy Policy</strong></p>
                                                                <p class="mb-5">If we decide to change our privacy policy, we will update the Privacy Policy modification date below.</p>
                                                            </div>
</section>
@endsection


@push('scripts')
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush