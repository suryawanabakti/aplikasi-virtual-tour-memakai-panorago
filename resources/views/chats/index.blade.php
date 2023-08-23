@extends('public.layouts.app')
@section('content')
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <style>
                    .chat-online {
                        color: #34ce57
                    }

                    .chat-offline {
                        color: #e4606d
                    }

                    .chat-messages {
                        display: flex;
                        flex-direction: column;
                        max-height: 800px;
                        overflow-y: scroll
                    }

                    .chat-message-left,
                    .chat-message-right {
                        display: flex;
                        flex-shrink: 0
                    }

                    .chat-message-left {
                        margin-right: auto
                    }

                    .chat-message-right {
                        flex-direction: row-reverse;
                        margin-left: auto
                    }

                    .py-3 {
                        padding-top: 1rem !important;
                        padding-bottom: 1rem !important;
                    }

                    .px-4 {
                        padding-right: 1.5rem !important;
                        padding-left: 1.5rem !important;
                    }

                    .flex-grow-0 {
                        flex-grow: 0 !important;
                    }

                    .border-top {
                        border-top: 1px solid #dee2e6 !important;
                    }
                </style>
                <div class="card-header">
                    <h4 class="card-title">Chat</h4>
                </div>
                <div class="card-body">
                    <main class="content">
                        <div class="container p-0">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-12 col-lg-12 col-xl-9">
                                        <div class="position-relative">
                                            <div class="chat-messages p-4" id="bodyChat">
                                                <div class="chat-message-right mb-4">
                                                    <div>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                            class="rounded-circle mr-1" alt="Chris Wood" width="40"
                                                            height="40">
                                                        <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                                    </div>
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                        <div class="font-weight-bold mb-1">You</div>
                                                        Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te
                                                        vix.
                                                    </div>
                                                </div>
                                                <div class="chat-message-left pb-4">
                                                    <div>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                            class="rounded-circle mr-1" alt="Sharon Lessman" width="40"
                                                            height="40">
                                                        <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                                                    </div>
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                        <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat
                                                        animal commodo.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-grow-0 py-3 px-4 border-top">
                                            <div class="mb-2" id="suggestion">


                                            </div>

                                            <div class="input-group">
                                                <input type="text" id="myMessage" class="form-control"
                                                    oninput="myMessage(this.value)" onkeypress="onEnter(event)"
                                                    placeholder="Type your message">
                                                <button class="btn btn-primary">Send</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function changeText(text, word) {
            var message = $('#myMessage').val()
            let result = message.replace(word, text);
            $('#myMessage').val(result)
            $('#suggestion').html(``)
        }

        function onEnter(event) {
            if (event.key == "Enter") {
                var message = $('#myMessage').val()
                $('#bodyChat').append(`<div class="chat-message-right mb-4">
                                                    <div>
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                            class="rounded-circle mr-1" alt="Chris Wood" width="40"
                                                            height="40">
                                                        <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                                    </div>
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                        <div class="font-weight-bold mb-1">You</div>${message}
                                                    </div>
                                                </div>`)
                $('#myMessage').val(``)
                $('#suggestion').html(``)
            }
        }

        function myMessage(value) {
            if (value.length > 3) {
                $.ajax({
                    url: `/test?word=${value}`,
                    success: function(res) {
                        var text = ''
                        res.suggest.forEach(element => {
                            text = text +
                                ` <span class="btn btn-secondary btn-sm" onclick="changeText('${element}', '${res.word}')">${element}</span>`
                        });
                        $('#suggestion').html(text)
                    },
                    error: function(err) {
                        $('#suggestion').html('')
                    }
                });
            }
        }
    </script>
@endpush
