<?php
declare(strict_types=1);

// see https://www.jetbrains.com/help/phpstorm/ide-advanced-metadata.html
namespace PHPSTORM_META {

    override(\Github\Client::api(0), map([
        "me" => \Github\Api\CurrentUser::class,
        "current_user" => \Github\Api\CurrentUser::class,
        "currentUser" => \Github\Api\CurrentUser::class,
        "codeOfConduct" => \Github\Api\Miscellaneous\CodeOfConduct::class,
        "deployment" => \Github\Api\Deployment::class,
        "deployments" => \Github\Api\Deployment::class,
        "ent" => \Github\Api\Enterprise::class,
        "enterprise" => \Github\Api\Enterprise::class,
        "emojis" => \Github\Api\Miscellaneous\Emojis::class,
        "git" => \Github\Api\GitData::class,
        "git_data" => \Github\Api\GitData::class,
        "gitData" => \Github\Api\GitData::class,
        "gist" => \Github\Api\Gists::class,
        "gists" => \Github\Api\Gists::class,
        "gitignore" => \Github\Api\Miscellaneous\Gitignore::class,
        "apps" => \Github\Api\Apps::class,
        "issue" => \Github\Api\Issue::class,
        "issues" => \Github\Api\Issue::class,
        "markdown" => \Github\Api\Markdown::class,
        "licenses" => \Github\Api\Miscellaneous\Licenses::class,
        "notification" => \Github\Api\Notification::class,
        "notifications" => \Github\Api\Notification::class,
        "organization" => \Github\Api\Organization::class,
        "organizations" => \Github\Api\Organization::class,
        "org_project" => \Github\Api\Organization\Projects::class,
        "orgProject" => \Github\Api\Organization\Projects::class,
        "org_projects" => \Github\Api\Organization\Projects::class,
        "orgProjects" => \Github\Api\Organization\Projects::class,
        "organization_project" => \Github\Api\Organization\Projects::class,
        "organizationProject" => \Github\Api\Organization\Projects::class,
        "organization_projects" => \Github\Api\Organization\Projects::class,
        "organizationProjects" => \Github\Api\Organization\Projects::class,
        "pr" => \Github\Api\PullRequest::class,
        "pulls" => \Github\Api\PullRequest::class,
        "pullRequest" => \Github\Api\PullRequest::class,
        "pull_request" => \Github\Api\PullRequest::class,
        "pullRequests" => \Github\Api\PullRequest::class,
        "pull_requests" => \Github\Api\PullRequest::class,
        "rateLimit" => \Github\Api\RateLimit::class,
        "rate_limit" => \Github\Api\RateLimit::class,
        "repo" => \Github\Api\Repo::class,
        "repos" => \Github\Api\Repo::class,
        "repository" => \Github\Api\Repo::class,
        "repositories" => \Github\Api\Repo::class,
        "search" => \Github\Api\Search::class,
        "team" => \Github\Api\Organization\Teams::class,
        "teams" => \Github\Api\Organization\Teams::class,
        "member" => \Github\Api\Organization\Members::class,
        "members" => \Github\Api\Organization\Members::class,
        "user" => \Github\Api\User::class,
        "users" => \Github\Api\User::class,
        "authorization" => \Github\Api\Authorizations::class,
        "authorizations" => \Github\Api\Authorizations::class,
        "meta" => \Github\Api\Meta::class,
        "graphql" => \Github\Api\GraphQL::class,
        "outsideCollaborators" => \Github\Api\Organization\OutsideCollaborators::class,
        "outside_collaborators" => \Github\Api\Organization\OutsideCollaborators::class,
    ]));
}
