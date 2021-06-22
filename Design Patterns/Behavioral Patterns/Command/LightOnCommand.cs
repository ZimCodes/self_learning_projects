using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Command
{
    class LightOnCommand : ICommand
    {
        Light light;
        public LightOnCommand(Light light)
        {
            this.light = light;
        }
        public void Execute()
        {
            RemoteController.lightStat -= light.TurnLightOff;
            RemoteController.lightStat += light.TurnLightOn;
        }

        public void UnExecute()
        {
            RemoteController.lightStat -= light.TurnLightOn;
            RemoteController.lightStat += light.TurnLightOff;
        }
    }
}
