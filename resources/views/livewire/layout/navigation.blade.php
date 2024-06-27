<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>



<nav class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="logo-apple"></ion-icon>
                </span>
                <span class="title">Brand Name</span>
            </a>
        </li>

        
        <x-nav-link :href="route('dashboard')" icon="settings-outline" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
        </x-nav-link>
       
        <x-nav-link :href="route('dashboard.products')" icon="settings-outline" :active="request()->routeIs('dashboard.products')" wire:navigate>
            {{ __('Products') }}
        </x-nav-link>
       
        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="chatbubble-outline"></ion-icon>
                </span>
                <span class="title">Messages</span>
            </a>
        </li>

    

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="settings-outline"></ion-icon>
                </span>
                <span class="title">Settings</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title">psss</span>
            </a>
        </li>

        <li wire:click.navigate="logout" >
     
            <a href="">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">
                    logout
                </span>
            </a>
            
        </li>
    </ul>
</nav>




