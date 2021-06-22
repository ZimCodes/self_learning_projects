using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Command
{
    class ChangeColorCommand : ICommand
    {
        
        Light light;
        public ChangeColorCommand(Light light)
        {
            this.light = light;
        }
        public void Execute()
        {
            RemoteController.lightStat -= light.TurnLightOff;
            RemoteController.lightStat += light.TurnLightOn;
            RemoteController.lightStat += light.ChangeLightColorToBlue;
        }
        public void UnExecute()
        {
            RemoteController.lightStat -= light.TurnLightOn;
            RemoteController.lightStat -= light.ChangeLightColorToBlue;
            RemoteController.lightStat += light.TurnLightOff;
        }
    }
}
