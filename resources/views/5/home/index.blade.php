@extends('5.layout')

@section('content')

<x-layout.container>
    <x-layout.row nb-cols="1" nb-cols-md="3" class="mb-3 text-center">        
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </x-layout.row>

    <h2 class="display-6 text-center mb-4">Compare plans</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Free</th>
            <th style="width: 22%;">Pro</th>
            <th style="width: 22%;">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sharing</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited members</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
    
    
    <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">Featured post</h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">Post title</h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

            </div>
          </div>
        </div>
    </div>
    
    <x-layout.row>

        <h2>Alert</h2>

        <x-alert type="primary">
            This is an alert !!!
        </x-alert>
        <x-alert type="secondary">
            This is an alert !!!
        </x-alert>
        <x-alert type="success">
            This is an gay alert 2 !!!
        </x-alert>
        <x-alert type="danger">
            This is an alert !!!
        </x-alert>
        <x-alert type="warning">
            This is an alert !!!
        </x-alert>
        <x-alert type="info">
            This is an alert !!!
        </x-alert>
        <x-alert type="light">
            This is an alert !!!
        </x-alert>
        <x-alert type="dark">
            This is an alert !!!
        </x-alert>

        <h2>Forms</h2>

        @php
            $post = new \App\Models\Post([
                'category_id' => 2, 
                'title' => 'My title', 
                'author_mail' => 'ceddyg@free.fr', 
                'date' => '2022-02-06', 
                'tags' => [2, 3],
                'priority' => 1,
                'note' => 3,
                'active' => true
            ]);        

            $categories = [1 => 'Category 1', 2 => 'Category 2', 3 => 'Category 3', 'value' => 'Wrong value'];
            $tags = [1 => 'General', 2 => 'Sport', 3 => 'Economy', 4 => 'Other'];
            $priorities = [0 => 'Low', 1 => 'Medium', 2 => 'High'];
        @endphp

        <x-form :model="$post ?? null" :method="isset($post) ? 'PUT' : 'POST'">
            <x-forms.text name="title" label="Title" />
            <x-forms.email name="author_mail" label="Author E-mail" />
            <x-forms.date name="date" label="Date" />
            <x-forms.select name="category_id" label="Category" :options="$categories" />

            <x-forms.label name="tags[]" label="Tags" />
            @foreach ($tags as $id => $tag)
                <x-forms.checkbox name="tags[]" :label="$tag" :value="$id" />
            @endforeach

            <x-forms.label name="priority" label="Priority" />
            @foreach ($priorities as $id => $priority)
                <x-forms.radio name="priority" :label="$priority" :value="$id" />
            @endforeach

            <x-forms.switch-toggle name="active" label="Active" />
            <x-forms.range name="note" label="Note" min="0" max="5" />

            <x-forms.label label="Test" />
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Email</label>
                </div>
            </div>

            <x-forms.submit value="Send" color="danger" />
        </x-form>
    </x-layout.row>
    
    <x-layout.row class="mt-5">
        <x-layout.col size="12" size-md="3">
            First in DOM, no order applied
        </x-layout.col>
        
        <x-layout.col size="12" size-md="6" order="5">
            Second in DOM, with a larger order
        </x-layout.col>
        
        <x-layout.col size="12" size-md="2" order="1" offset-md="1">
            Third in DOM, with an order of 1
        </x-layout.col>
    </x-layout.row>
    
    <x-layout.row class="mt-5">
        <x-layout.col size="12">
            <h2>Accordions</h2>
            
            <x-accordion>
                <x-accordion.item show>
                    <x-slot name="heading">
                        Accordion Item #1
                    </x-slot>
                    <x-slot name="collapse">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </x-slot>
                </x-accordion.item>
                <x-accordion.item>
                    <x-slot name="heading">
                        Accordion Item #2
                    </x-slot>
                    <x-slot name="collapse">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </x-slot>
                </x-accordion.item>
                <x-accordion.item>
                    <x-slot name="heading">
                        Accordion Item #3
                    </x-slot>
                    <x-slot name="collapse">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </x-slot>
                </x-accordion.item>
            </x-accordion>
        </x-layout.col>
    </x-layout.row>
    
    <x-layout.row class="mt-5">
        <x-layout.col size="12">
            <h2>Badges</h2>
            
            <button type="button" class="btn btn-primary">
                Notifications <x-badge>4</x-badge>
            </button>
            
            <x-badge color="primary">Primary</x-badge>
            <x-badge color="secondary">Secondary</x-badge>
            <x-badge color="success">Success</x-badge>
            <x-badge color="danger">Danger</x-badge>
            <x-badge color="warning" class="text-dark">Warning</x-badge>
            <x-badge color="info" class="text-dark">Info</x-badge>
            <x-badge color="light" class="text-dark">Light</x-badge>
            <x-badge color="dark">Dark</x-badge>
        </x-layout.col>
    </x-layout.row>
    
    <x-layout.row class="mt-5">
        <x-layout.col size="12">
            <h2>Breadcrumb</h2>
            
            <x-breadcrumb divider=">">
                <x-breadcrumb.item>
                    <a href="#">Home</a>
                </x-breadcrumb.item>
                <x-breadcrumb.item>
                    <a href="#">Library</a>
                </x-breadcrumb.item>
                <x-breadcrumb.item current>
                    Data
                </x-breadcrumb.item>
            </x-breadcrumb>
        </x-layout.col>
    </x-layout.row>
    
    <x-layout.row class="mt-5">
        <x-layout.col size="12">
            <h2>Buttons</h2>
            
            <x-button type="primary" disabled>Primary</x-button>
            <x-button type="secondary">Secondary</x-button>
            <x-button type="success">Success</x-button>
            <x-button type="danger">Danger</x-button>
            <x-button type="warning" class="text-dark">Warning</x-button>
            <x-button type="info" class="text-dark">Info</x-button>
            <x-button type="light" class="text-dark">Light</x-button>
            <x-button type="dark">Dark</x-button>
            
            <h3 class="h4 mt-3">Outline</h3>
            
            <x-button type="primary" outline>Primary</x-button>
            <x-button type="secondary" outline>Secondary</x-button>
            <x-button type="success" outline>Success</x-button>
            <x-button type="danger" outline>Danger</x-button>
            <x-button type="warning" outline class="text-dark">Warning</x-button>
            <x-button type="info" outline class="text-dark">Info</x-button>
            <x-button type="light" outline class="text-dark">Light</x-button>
            <x-button type="dark" outline>Dark</x-button>
            
            <h3 class="h4 mt-3">Size</h3>
            
            <x-button type="primary" size="sm">Primary</x-button>
            <x-button type="primary" size="lg">Primary</x-button>
        </x-layout.col>
    </x-layout.row>
    
    <x-layout.row class="mt-5">
        <x-layout.col size="12">
            <h2>Button group</h2>
            
            <x-button-group>
                <x-button type="primary">Primary</x-button>
                <x-button type="secondary" outline>Secondary</x-button>
                <x-button type="success">Success</x-button>
            </x-button-group>            
        </x-layout.col>
    </x-layout.row>

    <x-layout.row class="mt-5">
        <x-layout.col size="12">
            <h2>Spinner</h2>
             <x-spinner color="primary"/>
             <x-spinner color="secondary"/>
             <x-spinner color="success"/>
             <x-spinner color="danger"/>
             <x-spinner color="warning"/>
             <x-spinner color="info"/>
             <x-spinner color="light"/>
             <x-spinner color="dark"/>
             <br/>
             {{--Version Colorée--}}
             <x-spinner color="" type="grow"/>
             <x-spinner color="primary" type="grow"/>
             <x-spinner color="secondary" type="grow"/>
             <x-spinner color="success" type="grow"/>
             <x-spinner color="danger" type="grow"/>
             <x-spinner color="warning" type="grow"/>
             <x-spinner color="info" type="grow"/>
             <x-spinner color="light" type="grow"/>
             <x-spinner color="dark" type="grow"/>
             <br/>

             {{--Version Small--}}
             <x-spinner color="primary" size="sm"/>
             <x-spinner color="secondary" size="sm"/>
             <x-spinner color="success" size="sm"/>
             <x-spinner color="danger" size="sm"/>
             <x-spinner color="warning" size="sm"/>
             <x-spinner color="info" size="sm"/>
             <x-spinner color="light" size="sm"/>
             <x-spinner color="dark" size="sm"/>
             <br/>

             <x-spinner color="" type="grow" size="sm" class="toto"/>
             <x-spinner color="primary" type="grow" size="sm"/>
             <x-spinner color="secondary" type="grow" size="sm"/>
             <x-spinner color="success" type="grow" size="sm"/>
             <x-spinner color="danger" type="grow" size="sm"/>
             <x-spinner color="warning" type="grow" size="sm"/>
             <x-spinner color="info" type="grow" size="sm"/>
             <x-spinner color="light" type="grow" size="sm"/>
             <x-spinner color="dark" type="grow" size="sm"/>
             <br/>



        </x-layout.col>
    </x-layout.row>





</x-layout.container>
@endsection
