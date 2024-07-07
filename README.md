# Job Refinery

[jobrefinery.io](https://jobrefinery.io)

## Local environment setup

Copy .env.example to .env

```
cp .env.exmple .env
```

Run Laravel Sail to run the docker containers

```
./vendor/bin/sail up
```

Or to run in detached mode:

```
./vendor/bin/sail up -d
```

Install composer packages

```
./vendor/bin/sail composer install
```

Run database migrations

```
./vendor/bin/sail artisan migrate
```

Run Larastan for static analysis

```
./vendor/bin/sail composer analyse
```

Install NPM dependencies

```
./vendor/bin/sail npm install
```

Run Vite to compile and watch our fontend assets

```
./vendor/bin/sail npm run dev
```

## Tech stack

-   [PHP](https://www.php.net/) - Server side web programming language.
-   [Laravel](https://laravel.com/) - Batteries included full stack PHP framework.
-   [PostgreSQL](https://www.postgresql.org/) - Relational Database.
-   [Vue](https://vuejs.org/) - Frontend UI and interactivity.
-   [Inertia](https://inertiajs.com/) - Easy single page apps with SSR with Laravel and Vue.
-   [Vite](https://vitejs.dev/) - Frontend build tool.
-   [Radix UI](https://www.radix-ui.com/) - Unstyled component Library.
-   [Tailwind](https://tailwindcss.com/) - CSS Styling framework.
-   [Shadcn](https://ui.shadcn.com/) - Styled Radix UI components with Taildwind.
-   [TypeScript](https://www.typescriptlang.org/) - Typed JavaScript.
-   [Docker](https://www.docker.com/) - Containers for local development and production deployments.
-   [Laravel Sail](https://laravel.com/docs/11.x/sail) - To manage Docker containers for local development.
