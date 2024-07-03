<?php

namespace Framework;

class Router
{
    private array $routes = [];

    public function add(string $path, array $params = []): void
    {
        $this->routes[] = [
            "path" => $path,
            "params" => $params
        ];
    }

    public function match(string $path): array|bool
    {
        

        $path = trim($path, "/");
     
        foreach ($this->routes as $route) {

            // $pattern = "#^/(?<controller>[a-z]+)/(?<action>[a-z]+)$#";

            $pattern = $this->getPatternFromRoutePath($route["path"]);
            // echo $pattern . "\n" . $route["pat h"] . "\n";

            if (preg_match($pattern, $path, $matches)) {

                $matches = array_filter($matches, "is_string", ARRAY_FILTER_USE_KEY);

                $params = array_merge($matches, $route["params"]);

                return $params;
            }
        }
        return false;
    }

    private function getPatternFromRoutePath(string $route_path): string
    {

       
        $route_path = trim($route_path, "/");

        $segments = explode("/", $route_path);

        $segments = array_map(function (string $segment): string {

            if (preg_match("#^\{([a-z][a-z0-9]*)\}$#", $segment, $matches)) {

                $segment = "(?<" . $matches[1] . ">[a-z]+)";;
            };

            return $segment;
        }, $segments);

        return "#^" . implode("/", $segments) . "$#";
    }
}
