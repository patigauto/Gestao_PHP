using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Gestao_Financeira.Startup))]
namespace Gestao_Financeira
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
