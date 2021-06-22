using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Command
{
    class RemoteController
    {
        ICommand command;
        public delegate void LightStatus();
        public static event LightStatus lightStat;
        public RemoteController(ICommand command)
        {
            this.command = command;  
        }
        public void ExecuteCommand()
        {
            command.Execute();
            lightStat();
        }
        public void UnExecuteCommand()
        {
            command.UnExecute();
            lightStat();
        }
    }
}
