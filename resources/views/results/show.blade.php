@extends('layouts.app')

@section('content')
<div class="col-md-1" style="margin-left: 65px;">
    <a href="/home"><button class="btn btn-primary btn-lg active" >Kembali</button></a>
</div>

<div class="row">
    <div class="col-md-11">
        <h3 class="page-title">@lang('quickadmin.results.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view-result')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        @if(Auth::user()->isAdmin())
                        <tr>
                            <th>@lang('quickadmin.results.fields.user')</th>
                            <td>{{ $test->user->name or '' }} ({{ $test->user->email or '' }})</td>
                        </tr>
                        @endif
                        <tr>
                            <th>@lang('quickadmin.results.fields.date')</th>
                            <td>{{ $test->created_at or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.results.fields.result')</th>
                            <td>{{ $test->result }}/10</td>
                        </tr>
                    </table>
                <?php $i = 1 ?>
                @foreach($results as $result)
                    <table class="table table-bordered table-striped">
                        <tr class="test-option{{ $result->correct ? '-true' : '-false' }}">
                            <th style="width: 10%">Question #{{ $i }}</th>
                            <th>{{ $result->question->question_text or '' }}</th>
                        </tr>
                        @if ($result->question->code_snippet != '')
                            <tr>
                                <td>Code snippet</td>
                                <td><div class="code_snippet">{!! $result->question->code_snippet !!}</div></td>
                            </tr>
                        @endif
                        <tr>
                            <td>Options</td>
                            <td>
                                <ul>
                                @foreach($result->question->options as $option)
                                    <li style="@if ($option->correct == 1) font-weight: bold; @endif
                                        @if ($result->option_id == $option->id) "> @endif {{ $option->option }}
                                        @if ($result->option_id == $option->id) &nbsp &nbsp &nbsp @endif
                                    </li>
                                @endforeach
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Answer Explanation</td>
                            <td>
                            {!! $result->question->answer_explanation  !!}
                                @if ($result->question->more_info_link != '')
                                    <br>
                                    <br>
                                    Read more:
                                    <a href="{{ $result->question->more_info_link }}" target="_blank">{{ $result->question->more_info_link }}</a>
                                @endif
                            </td>
                        </tr>
                    </table>
                <?php $i++ ?>
                @endforeach
                </div>
            </div>

            <p>&nbsp;</p>

            {{-- <a href="{{ route('tests.index') }}" class="btn btn-default">Ulangi quiz</a>
            <a href="{{ route('results.index') }}" class="btn btn-default">Lihat seluruh hasil quiz</a> --}}
            
        </div>
    </div>
@stop

    </div>
</div>