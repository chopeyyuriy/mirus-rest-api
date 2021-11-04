<div class="row">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="col-xl-12" wire:ignore>
        <h6>Notification Manager</h6>
        <div class="mt-4">
            <div class="accordion" id="notificationAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="userManageHead">
                        <button class="accordion-button fw-medium " type="button" data-bs-toggle="collapse"
                            data-bs-target="#userManage" aria-expanded="true" aria-controls="userManage">
                            User Management
                        </button>
                    </h2>
                    <div id="userManage" class="accordion-collapse collapse show" aria-labelledby="userManageHead"
                        data-bs-parent="#notificationAccordion">
                        <div class="accordion-body">
                            <table class="table table-borderlesss">
                                <thead>
                                    <th>User Status</th>
                                    <th>Recipents</th>
                                    <th>Template</th>
                                    <th>Manage</th>
                                </thead>
                                <tbody>
                                    @foreach ($uM as $u)
                                        <tr>
                                            <td>{{ $u->name }}</td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)" data-id="{{ $u->id }}"
                                                            data-col="recipents" class="form-select">
                                                            <option {{ $u->recipents == 'admin' ? 'selected' : '' }}
                                                                value="admin">Admin</option>
                                                            <option {{ $u->recipents == 'buyer' ? 'selected' : '' }}
                                                                value="buyer">Buyer</option>
                                                            <option {{ $u->recipents == 'seller' ? 'selected' : '' }}
                                                                value="seller">Seller</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)" data-id="{{ $u->id }}"
                                                            data-col="template" class="form-select">
                                                            <option
                                                                {{ $u->template == 'template1' ? 'selected' : '' }}
                                                                value="template1">Template 1</option>
                                                            <option
                                                                {{ $u->template == 'template2' ? 'selected' : '' }}
                                                                value="template2">Template 2</option>
                                                            <option
                                                                {{ $u->template == 'template3' ? 'selected' : '' }}
                                                                value="template3">Template 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                    <input class="form-check-input mt-2" data-id="{{ $u->id }}"
                                                        data-col="status" onchange="saveData(event)"
                                                        {{ $u->status == 1 ? 'checked' : '' }} type="checkbox"
                                                        id="SwitchCheckSizemd">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ecommerceProductHead">
                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#eProduct" aria-expanded="true" aria-controls="eProduct">
                            eCommerce: Products
                        </button>
                    </h2>
                    <div id="eProduct" class="accordion-collapse collapse collapsed"
                        aria-labelledby="ecommerceProductHead" data-bs-parent="#notificationAccordion">
                        <div class="accordion-body">
                            <table class="table table-borderlesss">
                                <thead>
                                    <th>Product Status</th>
                                    <th>Recipents</th>
                                    <th>Template</th>
                                    <th>Manage</th>
                                </thead>
                                <tbody>
                                    @foreach ($eP as $u)
                                        <tr>
                                            <td>{{ $u->name }}</td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)"
                                                            data-id="{{ $u->id }}" data-col="recipents"
                                                            class="form-select">
                                                            <option {{ $u->recipents == 'admin' ? 'selected' : '' }}
                                                                value="admin">Admin</option>
                                                            <option {{ $u->recipents == 'buyer' ? 'selected' : '' }}
                                                                value="buyer">Buyer</option>
                                                            <option {{ $u->recipents == 'seller' ? 'selected' : '' }}
                                                                value="seller">Seller</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)"
                                                            data-id="{{ $u->id }}" data-col="template"
                                                            class="form-select">
                                                            <option
                                                                {{ $u->template == 'template1' ? 'selected' : '' }}
                                                                value="template1">Template 1</option>
                                                            <option
                                                                {{ $u->template == 'template2' ? 'selected' : '' }}
                                                                value="template2">Template 2</option>
                                                            <option
                                                                {{ $u->template == 'template3' ? 'selected' : '' }}
                                                                value="template3">Template 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                    <input class="form-check-input mt-2" data-id="{{ $u->id }}"
                                                        data-col="status" onchange="saveData(event)"
                                                        {{ $u->status == 1 ? 'checked' : '' }} type="checkbox"
                                                        id="SwitchCheckSizemd">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ecommerceOrderHead">
                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#eOrder" aria-expanded="true" aria-controls="eOrder">
                            eCommerce: Orders
                        </button>
                    </h2>
                    <div id="eOrder" class="accordion-collapse collapse collapsed" aria-labelledby="ecommerceOrderHead"
                        data-bs-parent="#notificationAccordion">
                        <div class="accordion-body">
                            <table class="table table-borderlesss">
                                <thead>
                                    <th>Product Status</th>
                                    <th>Recipents</th>
                                    <th>Template</th>
                                    <th>Manage</th>
                                </thead>
                                <tbody>
                                    @foreach ($eO as $u)
                                        <tr>
                                            <td>{{ $u->name }}</td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)"
                                                            data-id="{{ $u->id }}" data-col="recipents"
                                                            class="form-select">
                                                            <option {{ $u->recipents == 'admin' ? 'selected' : '' }}
                                                                value="admin">Admin</option>
                                                            <option {{ $u->recipents == 'buyer' ? 'selected' : '' }}
                                                                value="buyer">Buyer</option>
                                                            <option {{ $u->recipents == 'seller' ? 'selected' : '' }}
                                                                value="seller">Seller</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)"
                                                            data-id="{{ $u->id }}" data-col="template"
                                                            class="form-select">
                                                            <option
                                                                {{ $u->template == 'template1' ? 'selected' : '' }}
                                                                value="template1">Template 1</option>
                                                            <option
                                                                {{ $u->template == 'template2' ? 'selected' : '' }}
                                                                value="template2">Template 2</option>
                                                            <option
                                                                {{ $u->template == 'template3' ? 'selected' : '' }}
                                                                value="template3">Template 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                    <input class="form-check-input mt-2" data-id="{{ $u->id }}"
                                                        data-col="status" onchange="saveData(event)"
                                                        {{ $u->status == 1 ? 'checked' : '' }} type="checkbox"
                                                        id="SwitchCheckSizemd">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="CM_Head">
                        <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#CM" aria-expanded="true" aria-controls="CM">
                            Content Management
                        </button>
                    </h2>
                    <div id="CM" class="accordion-collapse collapse collapsed" aria-labelledby="CM_Head"
                        data-bs-parent="#notificationAccordion">
                        <div class="accordion-body">
                            <table class="table table-borderlesss">
                                <thead>
                                    <th>Product Status</th>
                                    <th>Recipents</th>
                                    <th>Template</th>
                                    <th>Manage</th>
                                </thead>
                                <tbody>
                                    @foreach ($cM as $u)
                                        <tr>
                                            <td>{{ $u->name }}</td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)"
                                                            data-id="{{ $u->id }}" data-col="recipents"
                                                            class="form-select">
                                                            <option {{ $u->recipents == 'admin' ? 'selected' : '' }}
                                                                value="admin">Admin</option>
                                                            <option {{ $u->recipents == 'buyer' ? 'selected' : '' }}
                                                                value="buyer">Buyer</option>
                                                            <option {{ $u->recipents == 'seller' ? 'selected' : '' }}
                                                                value="seller">Seller</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)"
                                                            data-id="{{ $u->id }}" data-col="template"
                                                            class="form-select">
                                                            <option
                                                                {{ $u->template == 'template1' ? 'selected' : '' }}
                                                                value="template1">Template 1</option>
                                                            <option
                                                                {{ $u->template == 'template2' ? 'selected' : '' }}
                                                                value="template2">Template 2</option>
                                                            <option
                                                                {{ $u->template == 'template3' ? 'selected' : '' }}
                                                                value="template3">Template 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                    <input class="form-check-input mt-2" data-id="{{ $u->id }}"
                                                        data-col="status" onchange="saveData(event)"
                                                        {{ $u->status == 1 ? 'checked' : '' }} type="checkbox"
                                                        id="SwitchCheckSizemd">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="MessagingHead">
                        <button class="accordion-button collapsed fw-medium" type="button" data-bs-toggle="collapse"
                            data-bs-target="#Messaging" aria-expanded="true" aria-controls="Messaging">
                            Messaging
                        </button>
                    </h2>
                    <div id="Messaging" class="accordion-collapse collapsed collapse" aria-labelledby="MessagingHead"
                        data-bs-parent="#notificationAccordion">
                        <div class="accordion-body">
                            <table class="table table-borderlesss">
                                <thead>
                                    <th>Product Status</th>
                                    <th>Recipents</th>
                                    <th>Template</th>
                                    <th>Manage</th>
                                </thead>
                                <tbody>
                                    @foreach ($msg as $u)
                                        <tr>
                                            <td>{{ $u->name }}</td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)"
                                                            data-id="{{ $u->id }}" data-col="recipents"
                                                            class="form-select">
                                                            <option {{ $u->recipents == 'admin' ? 'selected' : '' }}
                                                                value="admin">Admin</option>
                                                            <option {{ $u->recipents == 'buyer' ? 'selected' : '' }}
                                                                value="buyer">Buyer</option>
                                                            <option {{ $u->recipents == 'seller' ? 'selected' : '' }}
                                                                value="seller">Seller</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" ">
                                                    <div class="">
                                                        <select onchange="saveData(event)"
                                                            data-id="{{ $u->id }}" data-col="template"
                                                            class="form-select">
                                                            <option
                                                                {{ $u->template == 'template1' ? 'selected' : '' }}
                                                                value="template1">Template 1</option>
                                                            <option
                                                                {{ $u->template == 'template2' ? 'selected' : '' }}
                                                                value="template2">Template 2</option>
                                                            <option
                                                                {{ $u->template == 'template3' ? 'selected' : '' }}
                                                                value="template3">Template 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                    <input class="form-check-input mt-2" data-id="{{ $u->id }}"
                                                        data-col="status" onchange="saveData(event)"
                                                        {{ $u->status == 1 ? 'checked' : '' }} type="checkbox"
                                                        id="SwitchCheckSizemd">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="text-muted">
                                Well This is Accordia body
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- end accordion -->
        </div>
    </div>
    <!-- end col -->
</div>

{{-- <div>
    In work, do what you enjoy.
</div> --}}
