<?php
/**
 * Template name: Payment
 */

get_header(); 

$readonly = ( isset($_GET['amount']) && ! empty($_GET['amount']) ) ? 'readonly' : '';
$amount = ( isset($_GET['amount']) && ! empty($_GET['amount']) ) ? $_GET['amount'] : '';
?>

    <div id="rec477833266" class="r t-rec t-rec_pt_30 t-rec_pb_60 r_showed r_anim payment-wrapper" style="padding-top:30px;padding-bottom:60px; " data-record-type="106">
		<!-- T004 -->
		<div class="t004">
			<div class="t-container ">
				<div class="t-col t-col_10 t-prefix_1">
					<div field="text" class="t-text t-text_md">


                        <div class="t-popup__container t-width t-width_6" style="background-color:#ffffff;">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">
                                        Payment
                                    </div>
                                </div>

                                <form action="https://payment.maksekeskus.ee/pay/1/link.html">
                                    <div class="t-form__inputsbox narbuli-form">

                                        <div class="t-input-group t-input-group_nm" data-input-lid="1495810354468">
                                            <div class="t-input-block">
                                                <input name="amount" 
                                                       class="t-input" 
                                                       type="number" 
                                                       value="<?php echo $amount; ?>" 
                                                       <?php echo $readonly; ?>
                                                       require/>
                                            </div>
                                        </div>

                                        <input name="shopId" type="hidden" value="58cea00b-2da6-443e-9457-2224df976308" />
                                        <input name="paymentId" type="hidden" value="777" />
                                        <input name="locale" type="hidden" value="en" />
                                        <input name="country" type="hidden" value="lt" />
                                        <input name="donate" type="hidden" value="true" />

                                        <div class="t-form__submit">
                                            <input type="submit" class="t-submit" value="Proceed to checkout" />
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>


						<?php
						while ( have_posts() ) :
							the_post();

							the_content();

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
get_footer();