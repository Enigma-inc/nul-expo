@extends('partials.master')

@section('content')
<section>
    <div class="page-title">
        <h1>Organising Team</h1>
    </div>
</section>
<section class="padding-20">
    <section class="team-section" >
        <div class="auto-container">

            <div class="team">
                <!--Organising Team-->
                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/moeketsi_mpholo.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Dr Moeketsi Mpholo</h5>

                            </div>
                        </div>
                    </div>
                </article>
                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/mosotho_george.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Dr Mosotho George</h5>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/pulane_nkhabutlane.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Dr Pulane Nkhabutlane</h5>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/puleng_ranthimo.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Dr Puleng Ranthimo</h5>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/sissay_mekbib.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Dr Sissay Mekbib</h5>

                            </div>
                        </div>
                    </div>
                </article>

                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/thimothy_thamae.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Dr Thimothy Thamae</h5>

                            </div>
                        </div>
                    </div>
                </article>

                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/retselisitsoe_thamae.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Mr Rets'elisitsoe Thamae</h5>

                            </div>
                        </div>
                    </div>
                </article>

                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/maleshoane_ramoholi.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Mrs Maleshoane Ramoholi</h5>

                            </div>
                        </div>
                    </div>
                </article>

                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/himanshu_narayan.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Prof Himanshu Narayan</h5>

                            </div>
                        </div>
                    </div>
                </article>
                <article class="team-member col-xs-12 col-sm-4 col-md-3" >
                    <div class="inner">
                        <figure class="member-image"><img src="/images/team/kebitsamang_mothibe.jpg" alt="" title=""></figure>
                        <div class="lower">
                            <div class="member-title">
                                <h5>Mr Kebitsamang Mothibe</h5>

                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>
</section>
@stop

@section('scripts')
    <script>
    $(document).ready(function(){
                $.shuffle('.team article');

        });

    </script>

@stop
