<?php
include "rate/header.php";
?>
<!--���� START-->
<div class="line rate">
	<div class="itemlist">
		<div class="listhd">
			<h3>����Ʒ��������</h3>
			<ul class="act">
				<li>
					<input id="annoy-all" name="annoy-all" type="checkbox"/>
					<label for="annoy-all">ȫ����������</label>
				</li>
			</ul>
		</div>
		<div class="listbd">
			<form id="rateListForm" target='_top'
			class='remark-form'
			action="/remarkSeller4C.htm" name="addfeedback" method="post"
			data-checkLoginJson="http://rate.taobao.com/login_check_js.htm?type=json"
			data-checkLoginCallback="http://rate.taobao.com/login_check_js.htm?type=callback" >
				<fieldset>
					<input name='_tb_token_' type='hidden' value='54734fb1efee7'>
					<ul class="labels">
						<li class="itemdetail">
							����
						</li>
						<li class="radiolabel">
							<input id="rate-good-all" name="good-all" type="checkbox"/>
							<label for="rate-good-all">����</label>
						</li>
						<li class="radiolabel">
							����
						</li>
						<li class="radiolabel">
							����
						</li>
					</ul>
					<ul class="rate-list">
						<div>
							<input type="hidden" name="bizOrderIds" value="200004843756017" />
							<input type="hidden" name="auctionId200004843756017" value="14961119073" />
							<input type="hidden" name="auctionPictUrl200004843756017" value="i3/641471180/T2XO1zXkxaXXXXXXXX_!!641471180.jpg" />
							<input type="hidden" name="auctionSku200004843756017" value="��ɫ����:ǳ��;����:41" />
							<input type="hidden" name="prompt200004843756017" value="�ף�������ۻ��������Ұ����ܴ�һ������°�" />
							<input type="hidden" name="giftEventId200004843756017" value="0" />
							<input type="hidden" name="giftDesp200004843756017" value="" />
							<input type="hidden" name="canUploadPic200004843756017" value="false" />
							<input type="hidden" name="leafCatId200004843756017" value="50016744" />
							<input type="hidden" name="rootCatId200004843756017" value="50010728" />
							<input type="hidden" name="auctionPrice200004843756017" value="19.0" />
						</div>

						<li data-id="200004843756017" class="rate-box st-show-msg-box" data-prompt='�ף�������ۻ��������Ұ����ܴ�һ������°�'>
							<div class="item-rate-info" data-spm="1000328">
								<div class="item-detail">
									<a href="http://item.taobao.com/item.htm?id=14272958184&" target='_blank' class="item-d-img"> <img width="110" height="110" src="http://img01.taobaocdn.com/bao/uploaded/i1/T1hZCGXhFXXXaJGiIV_020844.jpg" /> </a>
									<div class="item-title">
										<a href="http://item.taobao.com/item.htm?id=14272958184&" target='_blank' title="ʱ����Ь����ʿ����Ь��Ь�����п��Ь͸����ЬӢ�׷������Ь">ʱ����Ь����ʿ����Ь��Ь�����п��Ь͸����ЬӢ�׷������Ь</a>
									</div>
									<ul class="sku">
										<li>
											��ɫ����:ǳ��;����:41
										</li>
									</ul>
								</div>
								<div class="item-rate-score">
									<span class="rate-score">���ӷ�</span>
								</div>
							</div>
							<div class="item-rate-main">
								<div class="item-rate-act">
									<div class="rate-control">
										<ul>
											<li class="good">
												<label for="rate-good-200004843756017">
													<input  id="rate-good-200004843756017" name="rates200004843756017" type="radio" value="1" class="good-rate"/>
													<i class="icon icon-rank icon-good"></i> <span class="label-hidden">����</span> </label>
											</li>
											<li class="normal">
												<label for="rate-normal-200004843756017">
													<input  id="rate-normal-200004843756017" name="rates200004843756017" type="radio" value="0" class="noraml-rate"/>
													<i class="icon icon-rank icon-normal"></i> <span class="label-hidden">����</span> </label>
											</li>
											<li class="bad">
												<label for="rate-bad-200004843756017">
													<input  id="rate-bad-200004843756017" name="rates200004843756017" type="radio" value="-1" class="bad-rate"/>
													<i class="icon icon-rank icon-bad"></i> <span class="label-hidden">����</span> </label>
											</li>
										</ul>
									</div>
									<div class="rate-msg-handle">
										<a href="#" class="show-msg-box"><i class='icon icon-addcomment'></i><span>��������</span></a>
									</div>
								</div>
								<div class="rate-msg-box">

								    <div class="sizebar">
								        <label class="size-lbl">ƽʱ��������</label>
								        <ul data-property="����" class="optionList sizeList">
                                            <li data-value="37"><a href="#" class="first"><span>37</span></a></li>
                                            <li data-value="38"><a href="#"><span>38</span></a></li>
                                            <li data-value="39"><a href="#"><span>39</span></a></li>
                                            <li data-value="40"><a href="#"><span>40</span></a></li>
                                            <li data-value="41" class="sel"><a href="#"><span>41</span></a></li>
                                            <li data-value="42"><a href="#"><span>42</span></a></li>
                                            <li data-value="43" id="sel1"><a href="#"><span>43</span></a></li>
                                        </ul>

								        <label class="feel-lbl">�ϽŸ���</label>
								        <ul data-property="����" class="optionList fellList">
                                            <li data-value="small"><a href="#" class="first"><span>ƫС</span></a></li>
                                            <li data-value="fit"><a href="#"><span>����</span></a></li>
                                            <li data-value="larger" class="sel"><a href="#"><span>ƫ��</span></a></li>
                                        </ul>

                                        <a href="#" class="fold-msg-box"><i class="icon-foldcomment"></i>��������</a>
                                        <a href="#" class="show-msg-box" style="display:none"><i class="icon icon-addcomment"></i><span>�������</span></a>
								    </div>

									<div class="bd">
										<div class="textinput ph-hide">
											<span class="ph-label"></span>
											<textarea name="rateContents200004843756017" maxlength="500" aria-labelby="label-ti-200004843756017" class="rate-msg"></textarea>
											<div class="text-counter">
												<strong class="r-t-counter">500</strong>��
											</div>
										</div>
									</div>

                                    <!--<div class="ft"><a href="#" class="close-msg-box">��������</a></div>-->
								</div>
								<div class='share-box'>
									<input id="share-rate-200004843756017" name="sharePrivacy200004843756017" value="true" type="checkbox"  class="rate-share"/>
									<label for="share-rate-200004843756017">ɹ��������ҳ</label>
									<input id="annoy-rate-200004843756017" name="anony200004843756017" value="1" type="checkbox"  class="rate-annoy"/>
									<input type="hidden" name="forceAnnoy200004843756017" value="false"/>
									<label for="annoy-rate-200004843756017">��������</label>
								</div>
							</div>
						</li>

					</ul>
				</fieldset>
				<fieldset>
					<h2><span>���̶�̬����</span></h2>
					<div class="dsr-box">
						<div id="starstip" class="starstip">
							<p>
								С��ʾ��������Ǿ��ܴ���ˣ��ô����ȫ�������Ρ�
							</p>
						</div>
						<ul class="stars">
							<li>
								<label>�������������</label>
								<span data-type="description" class="rate-stars"> <label>
										<input type="radio" value="1" name="description"  />
										һ��</label> <label>
										<input type="radio" value="2" name="description"  />
										����</label> <label>
										<input type="radio" value="3" name="description"  />
										����</label> <label>
										<input type="radio" value="4" name="description"  />
										����</label> <label>
										<input type="radio" value="5" name="description"  />
										����</label> </span>
							</li>
							<li>
								<label>���ҵķ���̬��</label>
								<span data-type="attitude" class="rate-stars"> <label>
										<input type="radio" value="1" name="attitude"  />
										һ��</label> <label>
										<input type="radio" value="2" name="attitude"  />
										����</label> <label>
										<input type="radio" value="3" name="attitude"  />
										����</label> <label>
										<input type="radio" value="4" name="attitude"  />
										����</label> <label>
										<input type="radio" value="5" name="attitude"  />
										����</label> </span>
							</li>
							<li>
								<label>���ҷ������ٶ�</label>
								<span data-type="delivery" class="rate-stars"> <label>
										<input type="radio" value="1" name="delivery"  />
										һ��</label> <label>
										<input type="radio" value="2" name="delivery"  />
										����</label> <label>
										<input type="radio" value="3" name="delivery"  />
										����</label> <label>
										<input type="radio" value="4" name="delivery"  />
										����</label> <label>
										<input type="radio" value="5" name="delivery"  />
										����</label> </span>
							</li>
							<li>
								<label>�����������ٶ�</label>
								<span data-type="logistics" class="rate-stars"> <label>
										<input type="radio" value="1" name="logistics"  />
										һ��</label> <label>
										<input type="radio" value="2" name="logistics"  />
										����</label> <label>
										<input type="radio" value="3" name="logistics"  />
										����</label> <label>
										<input type="radio" value="4" name="logistics"  />
										����</label> <label>
										<input type="radio" value="5" name="logistics"  />
										����</label> </span>
							</li>
						</ul>
					</div>
				</fieldset>
				<div class="submitbox">
					<input type="hidden" name="parentTradeId" value="200004843746017" />
					<input type="hidden" name="raterType" value="0" />
					<input type="hidden" name="raterUid" value="66461760" />
					<input type="hidden" name="ratedUid" value="641471180" />
					<input type="hidden" name="bizType" value="200" />
					<input type="hidden" name="dsrHaveDone" value="" />
					<input type="hidden" name="needRateNum" value="2" />
					<input type="hidden" name="buyerNick" value="����" />
					<input type="hidden" name="sellerNick" value="ziaqing" />

					<!--<button type="submit"  class="submit submit-btn" >-->
					<button type="button"  class="submit submit-btn" id="size-sub-btn">
						�ύ����
					</button>
					<input type="hidden" name="event_submit_do_create_rate" value="anything" />
					<input type="hidden" name="action" value="rate_action" />
				</div>
			</form>
		</div>
	</div>
</div>
<!--���� END-->
<?php
include "rate/footer.php";
