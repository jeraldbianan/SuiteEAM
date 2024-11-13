import { createRouter, createWebHistory } from 'vue-router';
import AppLayout from '@/components/AppLayout.vue';

const routes = [
  {
    path: '/',
    redirect: '/app/dashboard',
  },
  {
    path: '/app',
    name: 'app',
    component: AppLayout,
    meta: {
      requiresAuth: true,
    },
    children: [
      {
        path: 'dashboard',
        name: 'app.dashboard',
        component: () => import('@/views/DashboardView.vue'),
      },
      {
        path: 'employees',
        name: 'app.employees',
        component: () => import('@/views/EmployeesView.vue'),
      },
    ],
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('@/views/LoginView.vue'),
    meta: {
      requiresGuest: true,
    },
  },
  {
    path: '/request-password-reset',
    name: 'requestPasswordReset',
    component: () => import('@/views/RequestPasswordResetView.vue'),
    meta: {
      requiresGuest: true,
    },
  },
  {
    path: '/reset-password/:token',
    name: 'resetPassword',
    component: () => import('@/views/ResetPasswordView.vue'),
    meta: {
      requiresGuest: true,
    },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
