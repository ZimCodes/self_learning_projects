using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    abstract class RobotBuilder
    {
        public Robot robot { get; set; }
        public RobotBuilder()
        {
            this.robot = new Robot();
        }
        public abstract void buildRobotHead();
        public abstract void buildRobotTorso();
        public abstract void buildRobotArms();
        public abstract void buildRobotLegs();
    }
}
