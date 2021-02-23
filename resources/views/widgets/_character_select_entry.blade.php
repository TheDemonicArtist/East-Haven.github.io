<div class="submission-character mb-3 card">
    <div class="card-body">
        <div class="text-right"><a href="#" class="remove-character text-muted"><i class="fas fa-times"></i></a></div>
        <div class="row">
            <div class="col-md-2 align-items-stretch d-flex">
                <div class="d-flex text-center align-items-center">
                    <div class="character-image-blank hide">Enter character code.</div>
                    <div class="character-image-loaded">
                        @include('home._character', ['character' => $character->character])
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <a href="#" class="float-right fas fa-close"></a>
                <div class="form-group">
                    {!! Form::label('slug[]', 'Character Code') !!}
                    {!! Form::text('slug[]', $character->character->slug, ['class' => 'form-control character-code']) !!}
                </div>
                <div class="character-rewards">
                    <h4>Character Rewards</h4>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th width="70%">Reward</th>
                                <th width="30%">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="character-rewards">
                            @foreach($character->rewards as $reward)
                                <tr class="character-reward-row">
                                    <td>
                                        {!! Form::select('character_currency_id['.$character->character_id.'][]', $characterCurrencies, $reward->rewardable_id, ['class' => 'form-control currency-id']) !!}
                                    </td>
                                    <td class="d-flex align-items-center">
                                        {!! Form::text('character_quantity['.$character->character_id.'][]', $reward->quantity, ['class' => 'form-control mr-2 quantity']) !!}
                                        <a href="#" class="remove-reward d-block"><i class="fas fa-times text-muted"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-sm add-reward">Add Reward</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>