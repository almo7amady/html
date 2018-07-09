<template>
    <section class="home-wrapper" v-once>
        <nav class="nav has-shadow user-select">
            <div class="container">
                <h1 class="title">
                    {{ Laravel.title }}
                </h1>

                <div class="flex-center">
                    <router-link to="/tos" class="margin-right-1">
                        <el-button round size="small" type="text">Terms of Service</el-button>
                    </router-link>
                    <router-link to="/privacy-policy" class="margin-right-1">
                        <el-button round size="small" type="text">Privacy Policy</el-button>
                    </router-link>
                    <router-link to="/credits">
                        <el-button round size="small" type="text">Credits</el-button>
                    </router-link>
                </div>
            </div>
        </nav>

        <section id="page" class="home-submissions">
            <p>
                We are a team of one person! risen from the world of open-source. We believe in an open and modern Internet.
                Case Root's mission is to give people the power to share their content with not just their friends but the world and interact in real-time.
            </p>

            <br>
            <h2 class="title">Users are Rooters</h2>
            <p>
                On Case Root users are in charge. They get to decide what deserves more attention by participation. After all the words "Case Root" is intended to mean The term denotes the earliest, most basic, 'deepest' root diagnosis for a given case through a chain of events.
            </p>

            <br>
            <h2 class="title">Designed for the 21st century</h2>
            <p>
                Thanks to the power of open-source community, Case Root has become the most modern academic discussion platform on the Internet. It's been developed from scratch to work with latest web technologies such as WebSockets. Doctors have full control over their browsing experience. Case Root's UI is highly customizable yet deadly simple.
            </p>

            <br>
            <h2 class="title">Dedicated open-source platforms</h2>
            <p>
                    It gets even better: Case Root is 100% <a href="https://www.caseroot.com" target="_blank"> built upon open-source! platforms.. So, Thanks To Them ..</a>.
                    </p>
        </section>
    </section>
</template>

<script>
export default {
    data() {
        return {
            Laravel
        };
    }
};
</script>
